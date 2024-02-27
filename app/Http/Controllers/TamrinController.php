<?php

namespace App\Http\Controllers;

use App\Models\MasterAdmin;
use App\Models\Pembayaran;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TamrinController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Tamrin';

        
        if ($request->ajax()) {
            $filterBulan = $request->filterBulan;
            
            $lunas = Pembayaran::where('jenis_pembayaran','tamrin')
            ->whereDate('tanggal_pembayaran', 'like', $filterBulan . '%')
            ->where('status_pembayaran', 'lunas')
            ->orderBy('tanggal_pembayaran', 'desc')
            ->with(['santri', 'admin'])           
            ->get();
            return DataTables::of($lunas)
                ->make(true);
        }

        $tamrins = Pembayaran::where('jenis_pembayaran','tamrin')->get();
        $santris = Santri::all();
        $admins = User::all();
        $nominal_tamrin = MasterAdmin::first()->pluck('pembayaran_tamrin')->first();

        return view('auth.pembayaran.tamrin', [
            'tamrins' => $tamrins,
            'santris' => $santris,
            'admins' => $admins,
            'nominal_tamrin' => $nominal_tamrin,
        ], $data);
    }

    public function index_belum_lunas(Request $request)
    {
        if ($request->ajax()) {
            $belum_lunas = Pembayaran::where('jenis_pembayaran','tamrin')
            ->where('status_pembayaran', 'belum_lunas')
            ->orderBy('tanggal_pembayaran', 'desc')
            ->with(['santri', 'admin'])           
            ->get();
            return DataTables::of($belum_lunas)
                ->make(true);
        }
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required|not_in:Nama Santri', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'jumlah_pembayaran' => 'required|numeric|max:80000', // Menyatakan bahwa jumlah_pembayaran harus berupa angka dan tidak boleh melebihi 80000
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_santri.not_in' => 'Pilih santri terlebih dahulu!',
                'jumlah_pembayaran.required' => 'Masukkan jumlah pembayaran terlebih dahulu!',
                'jumlah_pembayaran.numeric' => 'Jumlah pembayaran harus berupa angka!',
                'jumlah_pembayaran.max' => 'Jumlah pembayaran tidak boleh melebihi ketentuan!',
            ]);            

            $nama_santri = $request->input('nama_santri');

            // Cari data santri berdasarkan nama
            $santri = Santri::where('nama_santri', $nama_santri)->first();

            // Pastikan santri ditemukan
            if (!$santri) {
                throw new \Exception('Santri tidak ditemukan.');
            }

            // Buat data pembayaran
            $jumlah_pembayaran_master = MasterAdmin::pluck('pembayaran_tamrin')->first();
            if ($request->input('jumlah_pembayaran') == $jumlah_pembayaran_master) {
                $pembayaran = Pembayaran::create([
                    'tanggal_pembayaran' => now(), // Sesuaikan dengan tanggal pembayaran yang diinginkan
                    'jumlah_pembayaran' => $jumlah_pembayaran_master, // Sesuaikan dengan jumlah pembayaran yang diinginkan
                    'jenis_pembayaran' => 'tamrin', // Sesuaikan dengan jenis pembayaran yang diinginkan
                    'status_pembayaran' => 'lunas',
                    'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                    'id_santri' => $santri->id_santri,
                ]);
            }
            else {
                $pembayaran = Pembayaran::create([
                    'tanggal_pembayaran' => now(), // Sesuaikan dengan tanggal pembayaran yang diinginkan
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'), // Sesuaikan dengan jumlah pembayaran yang diinginkan
                    'jenis_pembayaran' => 'tamrin', // Sesuaikan dengan jenis pembayaran yang diinginkan
                    'status_pembayaran' => 'belum_lunas',
                    'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                    'id_santri' => $santri->id_santri,
                ]);
            }

            return redirect()->back()->with('success', 'Pembayaran berhasil ditambahkan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
    
    public function get_edit_data($id_pembayaran)
    {
        $data['title'] = 'Edit Pembayaran Tamrin';

        $tamrin = Pembayaran::where('id_pembayaran', $id_pembayaran)->first();
        $jumlah_pembayaran_master = MasterAdmin::pluck('pembayaran_tamrin')->first();
        $santri = Santri::where('id_santri', $tamrin->id_santri)->first();
        $santris = Santri::where('id_santri', '!=', $santri->id_santri)->get();
        $admin = User::where('id_admin', $tamrin->id_admin)->first();
        $admins = User::where('id_admin', '!=', $admin->id_admin)->get();
        
        return view('auth.pembayaran.edit.edit_tamrin', [
            'tamrin' => $tamrin,
            'jumlah_pembayaran_master' => $jumlah_pembayaran_master,
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
                'jumlah_pembayaran' => 'required|numeric|max:80000',
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_admin.required' => 'Pilih admin terlebih dahulu!',
                'jumlah_pembayaran.required' => 'Masukkan jumlah pembayaran terlebih dahulu!',
                'jumlah_pembayaran.numeric' => 'Jumlah pembayaran harus berupa angka!',
                'jumlah_pembayaran.max' => 'Jumlah pembayaran tidak boleh melebihi ketentuan!',
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
            $jumlah_pembayaran_master = MasterAdmin::pluck('pembayaran_tamrin')->first();
            if ($request->input('jumlah_pembayaran') == $jumlah_pembayaran_master) {
                Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
                    'id_santri' => $santri->id_santri,
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'),
                    'status_pembayaran' => 'lunas',
                    'id_admin' => $admin->id_admin,
                    'updated_at' => now(),
                ]);
            }
            else{
                Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
                    'id_santri' => $santri->id_santri,
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'),
                    'id_admin' => $admin->id_admin,
                    'updated_at' => now(),
                ]);
            }
    
            return redirect()->route('tamrin')->with('success', 'Pembayaran berhasil diubah.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
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
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    } 

}
