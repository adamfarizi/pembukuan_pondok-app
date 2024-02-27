<?php

namespace App\Http\Controllers;

use App\Models\JenisIuran;
use App\Models\Pembayaran;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class IuranBulananController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Iuran Bulanan';

        if ($request->ajax()) {
            $filterBulan = $request->filterBulan;

            $data = Pembayaran::where('jenis_pembayaran', 'iuran_bulanan')
                ->whereDate('tanggal_pembayaran', 'like', $filterBulan . '%')
                ->where('status_pembayaran', 'lunas')
                ->orderBy('tanggal_pembayaran', 'desc')
                ->with(['santri', 'admin', 'jenis_iuran'])
                ->get();
            return DataTables::of($data)
                ->make(true);
        }

        $iuran_bulanans = Pembayaran::where('jenis_pembayaran', 'iuran_bulanan')->get();
        $jenis_iurans = JenisIuran::all();
        $santris = Santri::all();
        $admins = User::all();

        return view('auth.pembayaran.iuran_bulanan', [
            'iuran_bulanans' => $iuran_bulanans,
            'jenis_iurans' => $jenis_iurans,
            'santris' => $santris,
            'admins' => $admins,
        ], $data);
    }

    public function index_belum_lunas(Request $request)
    {
        if ($request->ajax()) {
            $belum_lunas = Pembayaran::where('jenis_pembayaran','iuran_bulanan')
            ->where('status_pembayaran', 'belum_lunas')
            ->orderBy('tanggal_pembayaran', 'desc')
            ->with(['santri', 'admin', 'jenis_iuran'])           
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
                'jenis_iuran' => 'required|not_in:Jenis Iuran',
                'jumlah_pembayaran' => 'required',
            ], [
                'jenis_iuran.not_in' => 'Pilih jenis iuran terlebih dahulu!',
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_santri.not_in' => 'Pilih santri terlebih dahulu!',
                'jumlah_pembayaran.required' => 'Masukkan jumlah pembayaran terlebih dahulu!',
            ]);

            $nama_santri = $request->input('nama_santri');

            // Cari data santri berdasarkan nama
            $santri = Santri::where('nama_santri', $nama_santri)->first();
            if (!$santri) {
                throw new \Exception('Santri not found.');
            }

            // Cari data jenis iuran
            $jenis_iuran = JenisIuran::where('id_jenis_iuran', $request->input('jenis_iuran'))->first();
            if (!$jenis_iuran) {
                throw new \Exception('Jenis iuran not found.');
            }
            // Buat data pembayaran
            if ($request->input('jumlah_pembayaran') == $jenis_iuran->pembayaran_jenis_iuran) {
                $pembayaran = Pembayaran::create([
                    'tanggal_pembayaran' => now(), // Sesuaikan dengan tanggal pembayaran yang diinginkan
                    'jumlah_pembayaran' => $jenis_iuran->pembayaran_jenis_iuran,
                    'jenis_pembayaran' => 'iuran_bulanan', // Sesuaikan dengan jenis pembayaran yang diinginkan
                    'id_jenis_iuran' => $jenis_iuran->id_jenis_iuran, 
                    'status_pembayaran' => 'lunas',
                    'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                    'id_santri' => $santri->id_santri,
                ]);
            } else{
                $pembayaran = Pembayaran::create([
                    'tanggal_pembayaran' => now(), // Sesuaikan dengan tanggal pembayaran yang diinginkan
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'),
                    'jenis_pembayaran' => 'iuran_bulanan', // Sesuaikan dengan jenis pembayaran yang diinginkan
                    'id_jenis_iuran' => $jenis_iuran->id_jenis_iuran, 
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
        $data['title'] = 'Edit Pembayaran Iuran Bulanan';

        $iuran_bulanan = Pembayaran::where('id_pembayaran', $id_pembayaran)
            ->with(['jenis_iuran'])
            ->first();
        $santri = Santri::where('id_santri', $iuran_bulanan->id_santri)->first();
        $santris = Santri::where('id_santri', '!=', $santri->id_santri)->get();
        $admin = User::where('id_admin', $iuran_bulanan->id_admin)->first();
        $admins = User::where('id_admin', '!=', $admin->id_admin)->get();

        return view('auth.pembayaran.edit.edit_iuran_bulanan', [
            'iuran_bulanan' => $iuran_bulanan,
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
                'nama_santri' => 'required',
                'nama_admin' => 'required',
                'jumlah_pembayaran' => 'required',
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_admin.required' => 'Pilih admin terlebih dahulu!',
                'jumlah_pembayaran.required' => 'Masukkan jumlah pembayaran terlebih dahulu!',
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

            $jumlah_pembayaran_master = JenisIuran::where('jenis_iuran', $request->input('jenis_iuran'))->pluck('pembayaran_jenis_iuran')->first();
            if ($request->input('jumlah_pembayaran') == $jumlah_pembayaran_master) {
                Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
                    'id_santri' => $santri->id_santri,
                    'id_admin' => $admin->id_admin,
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'),
                    'status_pembayaran' => 'lunas',
                    'updated_at' => now(),
                ]);
            } else {
                Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
                    'id_santri' => $santri->id_santri,
                    'id_admin' => $admin->id_admin,
                    'jumlah_pembayaran' => $request->input('jumlah_pembayaran'),
                    'updated_at' => now(),
                ]);
            }

            return redirect()->route('iuran_bulanan')->with('success', 'Pembayaran berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function delete_data($id_pembayaran)
    {
        try {
            // Temukan data pembayaran berdasarkan ID
            $pembayaran = Pembayaran::where('id_pembayaran', $id_pembayaran);

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
