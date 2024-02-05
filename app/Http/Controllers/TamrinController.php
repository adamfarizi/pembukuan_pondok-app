<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class TamrinController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Tamrin';

        $search_all = $request->input('search_all');
        $search_tanggal = $request->input('search_tanggal');
        $perPage_tamrin = $request->input('perPage_tamrin', 10);
        $query = Pembayaran::where('jenis_pembayaran', 'tamrin')
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
            $tamrins = $query->paginate($totalItems, ['*'], 'jenis_pembayaran');
        } else {
            $tamrins = $query->paginate($perPage_tamrin, ['*'], 'jenis_pembayaran');
        }        

        $santris = Santri::all();

        return view('auth.pembayaran.tamrin', [
            'perPage_tamrin' => $perPage_tamrin,
            'tamrins' => $tamrins,
            'santris' => $santris,
        ], $data);
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required|not_in:Nama Santri', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_santri.not_in' => 'Pilih santri terlebih dahulu!',
            ]);

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
                'jumlah_pembayaran' => $request->input('jumlah_pembayaran'), // Sesuaikan dengan jumlah pembayaran yang diinginkan
                'jenis_pembayaran' => 'tamrin', // Sesuaikan dengan jenis pembayaran yang diinginkan
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                'id_santri' => $santri->id_santri,
            ]);

            return redirect()->back()->with('success', 'Pembayaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    public function get_edit_data($id_pembayaran)
    {
        $data['title'] = 'Edit Pembayaran Tamrin';

        $tamrin = Pembayaran::where('id_pembayaran', $id_pembayaran)->first();
        $santri = Santri::where('id_santri', $tamrin->id_santri)->first();
        $santris = Santri::where('id_santri', '!=', $santri->id_santri)->get();
        $admin = User::where('id_admin', $tamrin->id_admin)->first();
        $admins = User::where('id_admin', '!=', $admin->id_admin)->get();

        return view('auth.pembayaran.edit.edit_tamrin', [
            'tamrin' => $tamrin,
            'santri' => $santri,
            'santris' => $santris,
            'admin' => $admin,
            'admins' => $admins,
        ], $data);
    }
    
    public function edit_data(Request $request, $id_pembayaran)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong
                'nama_admin' => 'required', // Menyatakan bahwa nama_admin tidak boleh kosong
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_admin.required' => 'Pilih admin terlebih dahulu!',
            ]);
    
            $nama_santri = $request->input('nama_santri');
            $nama_admin = $request->input('nama_admin');
    
            // Cari data santri berdasarkan nama
            $santri = Santri::where('nama_santri', $nama_santri)->first();
            $admin = User::where('nama', $nama_admin)->first();
    
            // Pastikan santri dan admin ditemukan
            if (!$santri) {
                throw new \Exception('Santri tidak ditemukan.');
            }
            if (!$admin) {
                throw new \Exception('Admin tidak ditemukan.');
            }
    
            // Buat data pembayaran
            Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
                'id_santri' => $santri->id_santri,
                'id_admin' => $admin->id_admin,
                'updated_at' => now(),
            ]);
    
            return redirect()->route('tamrin')->with('success', 'Pembayaran berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function delete_data($id_pembayaran)
    {
        try {
            // Temukan data pembayaran berdasarkan ID
            $pembayaran = Pembayaran::where('id_pembayaran',$id_pembayaran);

            // Pastikan pembayaran ditemukan
            if (!$pembayaran) {
                throw new \Exception('Pembayaran tidak ditemukan.');
            }

            // Hapus data pembayaran
            $pembayaran->delete();

            return redirect()->back()->with('success', 'Pembayaran berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    } 

}
