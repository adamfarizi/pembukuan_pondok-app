<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;

class BerandaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';
        // Menghitung total pemasukkan pondok
        $totalPemasukan = Pembayaran::sum('jumlah_pembayaran');

        // Menghitung total pengeluaran pondok
        $totalPengeluaran = Pengeluaran::sum('jumlah_pengeluaran');

        // Menghitung total keuangan pondok
        $totalKeuangan = $totalPemasukan - $totalPengeluaran;

        $totalsantri = Santri::count();

        return view('auth.beranda.beranda', [
            'totalPemasukan' => $totalPemasukan,
            'totalPengeluaran' => $totalPengeluaran,
            'totalKeuangan' => $totalKeuangan,
            'totalsantri' => $totalsantri,
        ], $data);
    }

    public function chartKeuangan()
    {
        // Mendapatkan data pemasukan per bulan
        $pemasukanPerBulan = Pembayaran::selectRaw('SUM(jumlah_pembayaran) as total_pemasukan, YEAR(tanggal_pembayaran) as tahun, MONTH(tanggal_pembayaran) as bulan')
            ->groupBy('tahun', 'bulan')
            ->orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->limit(6)
            ->get();

        // Mendapatkan data pengeluaran per bulan
        $pengeluaranPerBulan = Pengeluaran::selectRaw('SUM(jumlah_pengeluaran) as total_pengeluaran, YEAR(tanggal_pengeluaran) as tahun, MONTH(tanggal_pengeluaran) as bulan')
            ->groupBy('tahun', 'bulan')
            ->orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->limit(6)
            ->get();

        // Menggabungkan data pemasukan dan pengeluaran per bulan
        $data = [];
        foreach ($pemasukanPerBulan as $pemasukan) {
            $index = $this->getChartKeuangan($data, $pemasukan->tahun, $pemasukan->bulan);
            if ($index !== false) {
                $data[$index]['total_pemasukan'] = $pemasukan->total_pemasukan;
            } else {
                $data[] = [
                    'tahun' => $pemasukan->tahun,
                    'bulan' => $pemasukan->bulan,
                    'total_pemasukan' => $pemasukan->total_pemasukan,
                    'total_pengeluaran' => 0,
                ];
            }
        }

        foreach ($pengeluaranPerBulan as $pengeluaran) {
            $index = $this->getChartKeuangan($data, $pengeluaran->tahun, $pengeluaran->bulan);
            if ($index !== false) {
                $data[$index]['total_pengeluaran'] = $pengeluaran->total_pengeluaran;
            } else {
                $data[] = [
                    'tahun' => $pengeluaran->tahun,
                    'bulan' => $pengeluaran->bulan,
                    'total_pemasukan' => 0,
                    'total_pengeluaran' => $pengeluaran->total_pengeluaran,
                ];
            }
        }

        return response()->json($data);
    }

    public function getChartKeuangan($data, $tahun, $bulan)
    {
        foreach ($data as $index => $item) {
            if ($item['tahun'] == $tahun && $item['bulan'] == $bulan) {
                return $index;
            }
        }
        return false;
    }

    public function chartSantri()
    {
        $totalMaleSantri = Santri::where('jenis_kelamin_santri', 'laki-laki')->count();
        $totalFemaleSantri = Santri::where('jenis_kelamin_santri', 'perempuan')->count();

        return response()->json([
            'total_male_santri' => $totalMaleSantri,
            'total_female_santri' => $totalFemaleSantri,
        ]);
    }

}
