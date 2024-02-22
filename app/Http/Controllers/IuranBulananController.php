<?php

namespace App\Http\Controllers;

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
                ->orderBy('tanggal_pembayaran', 'desc')
                ->with(['santri', 'admin'])
                ->get();
            return DataTables::of($data)
                ->make(true);
        }

        $iuran_bulanans = Pembayaran::where('jenis_pembayaran', 'iuran_bulanan')->get();
        $santris = Santri::all();
        $admins = User::all();

        return view('auth.pembayaran.iuran_bulanan', [
            'iuran_bulanans' => $iuran_bulanans,
            'santris' => $santris,
            'admins' => $admins,
        ], $data);
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required|not_in:Nama Santri', // Menyatakan bahwa nama_santri tidak boleh kosong atau memiliki nilai "Nama Santri"
                'jumlah_pembayaran' => 'required',
            ], [
                'nama_santri.required' => 'Pilih santri terlebih dahulu!',
                'nama_santri.not_in' => 'Pilih santri terlebih dahulu!',
                'jumlah_pembayaran.required' => 'Masukkan jumlah pembayaran terlebih dahulu!',
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
                'jenis_pembayaran' => 'iuran_bulanan', // Sesuaikan dengan jenis pembayaran yang diinginkan
                'status_pembayaran' => 'lunas',
                'id_admin' => auth()->user()->id_admin, // Sesuaikan dengan id_admin yang sedang login
                'id_santri' => $santri->id_santri,
            ]);

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

        $iuran_bulanan = Pembayaran::where('id_pembayaran', $id_pembayaran)->first();
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
