<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Pengeluaran';

        $search_all = $request->input('search_all');
        $search_tanggal = $request->input('search_tanggal');
        $perPage_pengeluaran = $request->input('perPage_pengeluaran', 10);
        $query = Pengeluaran::orderBy('tanggal_pengeluaran', 'desc')
        ->when($search_all, function ($query) use ($search_all) {
            $query->where(function ($query) use ($search_all) {
                $query->whereHas('admin', function ($query) use ($search_all) {
                    $query->where('nama', 'like', '%' . $search_all . '%');
                });
            })
            ->orWhere('nama_pengeluar', 'like', '%' . $search_all . '%')
            ->orWhere('deskripsi_pengeluaran', 'like', '%' . $search_all . '%')
            ->orWhere('jumlah_pengeluaran', $search_all);
        })    
        ->when($search_tanggal, function ($query) use ($search_tanggal) {
            $query->whereDate('tanggal_pengeluaran', '=', $search_tanggal);
        })
        ->with(['admin']);
        if ($search_all || $search_tanggal) {
            $totalItems = $query->count();
            $pengeluarans = $query->paginate($totalItems, ['*'], 'pengeluaran');
        } else {
            $pengeluarans = $query->paginate($perPage_pengeluaran, ['*'], 'pengeluaran');
        }        
        $admins = User::all();

        return view('auth.pengeluaran.pengeluaran', [
            'perPage_pengeluaran' => $perPage_pengeluaran,
            'pengeluarans' => $pengeluarans,
            'admins' => $admins,
        ], $data);
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_pengeluar' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'jumlah_pengeluaran' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'deskripsi_pengeluaran' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
            ], [
                'nama_pengeluar.required' => 'Masukkan nama pengeluar terlebih dahulu!',
                'jumlah_pengeluaran.required' => 'Masukkan jumlah pengeluaran terlebih dahulu!',
                'deskripsi_pengeluaran.required' => 'Masukkan deskripsi pengeluaran terlebih dahulu!',
            ]);
        
            // Buat data pengeluaran
            $pengeluaran = Pengeluaran::create([
                'tanggal_pengeluaran' => now(),
                'jumlah_pengeluaran' => $request->input('jumlah_pengeluaran'),
                'deskripsi_pengeluaran' => $request->input('deskripsi_pengeluaran'),
                'nama_pengeluar' => $request->input('nama_pengeluar'),
                'id_admin' => auth()->user()->id_admin,
            ]);
        
            return redirect()->back()->with('success', 'Pengeluaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }        
    }

    public function get_edit_data($id_pengeluaran)
    {
        $data['title'] = 'Edit Pengeluaran';

        $pengeluaran = Pengeluaran::where('id_pengeluaran', $id_pengeluaran)->first();

        return view('auth.pengeluaran.edit.edit_pengeluaran', [
            'pengeluaran' => $pengeluaran,
        ], $data);
    }

    public function edit_data(Request $request, $id_pengeluaran)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_pengeluar' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'jumlah_pengeluaran' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'deskripsi_pengeluaran' => 'required', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
            ], [
                'nama_pengeluar.required' => 'Masukkan nama pengeluar terlebih dahulu!',
                'jumlah_pengeluaran.required' => 'Masukkan jumlah pengeluaran terlebih dahulu!',
                'deskripsi_pengeluaran.required' => 'Masukkan deskripsi pengeluaran terlebih dahulu!',
            ]);
    
            // Buat data pengeluaran
            Pengeluaran::where('id_pengeluaran', $id_pengeluaran)->update([
                'jumlah_pengeluaran' => $request->input('jumlah_pengeluaran'),
                'deskripsi_pengeluaran' => $request->input('deskripsi_pengeluaran'),
                'nama_pengeluar' => $request->input('nama_pengeluar'),
            ]);
    
            return redirect()->route('pengeluaran')->with('success', 'Pengeluaran berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('pengeluaran')->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function delete_data($id_pengeluaran)
    {
        try {
            // Temukan data pengeluaran berdasarkan ID
            $pengeluaran = Pengeluaran::where('id_pengeluaran',$id_pengeluaran);

            // Pastikan pengeluaran ditemukan
            if (!$pengeluaran) {
                throw new \Exception('Pengeluaran tidak ditemukan.');
            }

            // Hapus data pengeluaran
            $pengeluaran->delete();

            return redirect()->back()->with('success', 'Pengeluaran berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
}
