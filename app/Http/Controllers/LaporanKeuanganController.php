<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Facades\DataTables;

class LaporanKeuanganController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Laporan Keuangan';

        // Menghitung total pemasukkan pondok
        $totalPemasukan = Pembayaran::sum('jumlah_pembayaran');

        // Menghitung total pengeluaran pondok
        $totalPengeluaran = Pengeluaran::sum('jumlah_pengeluaran');

        // Menghitung total keuangan pondok
        $totalKeuangan = $totalPemasukan - $totalPengeluaran;

        return view('auth.laporan_keuangan.laporan_keuangan', [
            'totalPemasukan' => $totalPemasukan,
            'totalPengeluaran' => $totalPengeluaran,
            'totalKeuangan' => $totalKeuangan,
        ], $data);
    }

    public function chart()
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
            $index = $this->getChart($data, $pemasukan->tahun, $pemasukan->bulan);
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
            $index = $this->getChart($data, $pengeluaran->tahun, $pengeluaran->bulan);
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

    private function getChart($data, $tahun, $bulan)
    {
        foreach ($data as $key => $item) {
            if ($item['tahun'] == $tahun && $item['bulan'] == $bulan) {
                return $key;
            }
        }
        return false;
    }

    public function get_pemasukan(Request $request)
    {
        if ($request->ajax()) {
            $filterBulan = $request->filterBulan;

            $pemasukan = Pembayaran::whereDate('tanggal_pembayaran', 'like', $filterBulan . '%')
            ->orderBy('tanggal_pembayaran', 'desc')
            ->with(['santri', 'admin'])
            ->get();
            return DataTables::of($pemasukan)->make(true);
        }
    }

    public function get_pengeluaran(Request $request)
    {
        if ($request->ajax()) {
            $filterBulan = $request->filterBulan;

            $pengeluaran = Pengeluaran::whereDate('tanggal_pengeluaran', 'like', $filterBulan . '%')
            ->orderBy('tanggal_pengeluaran', 'desc')
            ->get();
            return DataTables::of($pengeluaran)->make(true);
        }
    }
}
