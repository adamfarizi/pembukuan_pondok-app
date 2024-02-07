<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LaporanKeuanganController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Laporan Keuangan';

        return view('auth.laporan_keuangan.laporan_keuangan', $data);
    }

    public function get_pemasukan(Request $request)
    {
        if ($request->ajax()) {
            $pemasukan = Pembayaran::orderBy('tanggal_pembayaran', 'desc')->with(['santri', 'admin'])
                ->get();
            return DataTables::of($pemasukan)->make(true);
        }
    }

    public function get_pengeluaran(Request $request)
    {
        if ($request->ajax()) {
            $pengeluaran = Pengeluaran::orderBy('tanggal_pengeluaran', 'desc')->get();
            return DataTables::of($pengeluaran)->make(true);
        }
    }

}
