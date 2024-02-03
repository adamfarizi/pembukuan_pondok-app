<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Santri;
use Illuminate\Http\Request;

class DaftarUlangController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Daftar Ulang';

        $search_all = $request->input('search_all');
        $search_tanggal = $request->input('search_tanggal');
        $perPage_daftar = $request->input('perPage_daftar', 10);
        $query = Pembayaran::where('jenis_pembayaran', 'daftar_ulang')
        ->when($search_all, function ($query) use ($search_all) {
            $query->where(function ($query) use ($search_all) {
                $query->whereHas('santri', function ($query) use ($search_all) {
                    $query->where('nama_santri', 'like', '%' . $search_all . '%');
                })
                ->orWhereHas('admin', function ($query) use ($search_all) {
                    $query->where('nama', 'like', '%' . $search_all . '%');
                });
            })
            ->orWhere('jumlah_pembayaran', $search_all);
        })    
        ->when($search_tanggal, function ($query) use ($search_tanggal) {
            $query->whereDate('tanggal_pembayaran', '=', $search_tanggal);
        })
        ->orderBy('tanggal_pembayaran', 'desc')
        ->with(['santri', 'admin']);
        if ($search_all || $search_tanggal) {
            $totalItems = $query->count();
            $daftar_ulangs = $query->paginate($totalItems, ['*'], 'jenis_pembayaran');
        } else {
            $daftar_ulangs = $query->paginate($perPage_daftar, ['*'], 'jenis_pembayaran');
        }        

        $santris = Santri::all();

        return view('auth.pembayaran.daftar_ulang', [
            'perPage_daftar' => $perPage_daftar,
            'daftar_ulangs' => $daftar_ulangs,
            'santris' => $santris,
        ], $data);
    }

    public function create_data(Request $request)
    {
        try {
            $nama_santri = $request->input('nama_santri');

            // Cari data santri berdasarkan nama
            $santri = Santri::where('nama_santri', $nama_santri)->first();

            // Pastikan santri ditemukan
            if (!$santri) {
                throw new \Exception('Santri not found.');
            }

            // Buat data pembayaran
            $pembayaran = Pembayaran::create([
                'tanggal_pembayaran' => now(), // Sesuaikan dengan tanggal pembayaran yang diinginkan
                'jumlah_pembayaran' => 50000, // Sesuaikan dengan jumlah pembayaran yang diinginkan
                'jenis_pembayaran' => 'daftar_ulang', // Sesuaikan dengan jenis pembayaran yang diinginkan
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                'id_santri' => $santri->id_santri,
            ]);

            return redirect()->back()->with('success', 'Pembayaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

}
