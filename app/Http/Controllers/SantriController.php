<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SantriController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Santri';
    
        $santris = Santri::get();

        if ($request->ajax()) {
            $data = Santri::orderBy('created_at', 'desc')->get();
            return DataTables::of($data)
                ->make(true);
        }

        return view('auth.santri.santri', [
            'santris' => $santris,
        ], $data);
    }

    public function get_create_data(Request $request)
    {
        $data['title'] = 'Santri';

        return view('auth.santri.input.input_santri', $data);
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required',
                'tempat_tanggal_lahir_santri' => 'required',
                'no_hp_santri' => 'required',
                'email_santri' => 'required|email',
                'jenis_kelamin_santri' => 'required',
                'status_santri' => 'required',
                'alamat_santri' => 'required',
                'nama_wali_santri' => 'required',
                'no_hp_wali_santri' => 'required',
                'ktp_santri' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'kk_santri' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'nama_santri.required' => 'Masukkan nama santri terlebih dahulu!',
                'tempat_tanggal_lahir_santri.required' => 'Masukkan tempat, tanggal lahir santri terlebih dahulu!',
                'no_hp_santri.required' => 'Masukkan nomor HP santri terlebih dahulu!',
                'email_santri.required' => 'Masukkan email santri terlebih dahulu!',
                'email_santri.email' => 'Format email tidak valid!',
                'jenis_kelamin_santri.required' => 'Pilih jenis kelamin santri terlebih dahulu!',
                'status_santri.required' => 'Pilih status santri terlebih dahulu!',
                'alamat_santri.required' => 'Masukkan alamat santri terlebih dahulu!',
                'nama_wali_santri.required' => 'Masukkan nama wali santri terlebih dahulu!',
                'no_hp_wali_santri.required' => 'Masukkan nomor HP wali santri terlebih dahulu!',
                'ktp_santri.required' => 'Upload file KTP santri terlebih dahulu!',
                'ktp_santri.image' => 'File harus berupa gambar!',
                'ktp_santri.mimes' => 'Format file KTP harus jpeg, png, jpg, atau gif!',
                'ktp_santri.max' => 'Ukuran file KTP maksimal 2 MB!',
                'kk_santri.required' => 'Upload file KK santri terlebih dahulu!',
                'kk_santri.image' => 'File harus berupa gambar!',
                'kk_santri.mimes' => 'Format file KK harus jpeg, png, jpg, atau gif!',
                'kk_santri.max' => 'Ukuran file KK maksimal 2 MB!',
            ]);

            $ktpSantri = $request->file('ktp_santri');
            $kkSantri = $request->file('kk_santri');

            // Mendapatkan nama asli file
            $ktpSantriName = $ktpSantri->getClientOriginalName();
            $kkSantriName = $kkSantri->getClientOriginalName();

            // Simpan file KTP dan KK
            $ktpSantri->move(public_path('berkas_santri/ktp_santri'), $ktpSantriName);
            $kkSantri->move(public_path('berkas_santri/kk_santri'), $kkSantriName);

            // Simpan data santri
            $santri = Santri::create([
                'nama_santri' => $request->input('nama_santri'),
                'tempat_tanggal_lahir_santri' => $request->input('tempat_tanggal_lahir_santri'),
                'jenis_kelamin_santri' => $request->input('jenis_kelamin_santri'),
                'alamat_santri' => $request->input('alamat_santri'),
                'no_hp_santri' => $request->input('no_hp_santri'),
                'email_santri' => $request->input('email_santri'),
                'status_santri' => $request->input('status_santri'),
                'nama_wali_santri' => $request->input('nama_wali_santri'),
                'no_hp_wali_santri' => $request->input('no_hp_wali_santri'),
                'ktp_santri' => $ktpSantriName,
                'kk_santri' => $kkSantriName,
                'id_admin' => auth()->user()->id_admin,
            ]);

            return redirect()->route('santri')->with('success', 'Data santri berhasil ditambahkan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
        
    }
    
    public function get_edit_data($id_santri)
    {
        $data['title'] = 'Edit Pengeluaran';

        $santri = Santri::where('id_santri', $id_santri)->first();

        return view('auth.santri.edit.edit_santri', [
            'santri' => $santri,
        ], $data);
    }

    public function edit_data(Request $request, $id_santri)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nama_santri' => 'required',
                'tempat_tanggal_lahir_santri' => 'required',
                'no_hp_santri' => 'required',
                'email_santri' => 'required|email',
                'jenis_kelamin_santri' => 'required',
                'status_santri' => 'required',
                'alamat_santri' => 'required',
                'nama_wali_santri' => 'required',
                'no_hp_wali_santri' => 'required',
                'ktp_santri' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'kk_santri' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'nama_santri.required' => 'Masukkan nama santri terlebih dahulu!',
                'tempat_tanggal_lahir_santri.required' => 'Masukkan tempat, tanggal lahir santri terlebih dahulu!',
                'no_hp_santri.required' => 'Masukkan nomor HP santri terlebih dahulu!',
                'email_santri.required' => 'Masukkan email santri terlebih dahulu!',
                'email_santri.email' => 'Format email tidak valid!',
                'jenis_kelamin_santri.required' => 'Pilih jenis kelamin santri terlebih dahulu!',
                'status_santri.required' => 'Pilih status santri terlebih dahulu!',
                'alamat_santri.required' => 'Masukkan alamat santri terlebih dahulu!',
                'nama_wali_santri.required' => 'Masukkan nama wali santri terlebih dahulu!',
                'no_hp_wali_santri.required' => 'Masukkan nomor HP wali santri terlebih dahulu!',
                'ktp_santri.image' => 'File harus berupa gambar!',
                'ktp_santri.mimes' => 'Format file KTP harus jpeg, png, jpg, atau gif!',
                'ktp_santri.max' => 'Ukuran file KTP maksimal 2 MB!',
                'kk_santri.image' => 'File harus berupa gambar!',
                'kk_santri.mimes' => 'Format file KK harus jpeg, png, jpg, atau gif!',
                'kk_santri.max' => 'Ukuran file KK maksimal 2 MB!',
            ]);

            // Perbarui gambar jika ada
            if ($request->hasFile('ktp_santri')) {
                $ktpSantri = $request->file('ktp_santri');
                $ktpSantriName = $ktpSantri->getClientOriginalName();
                $ktpSantri->move(public_path('berkas_santri/ktp_santri'), $ktpSantriName);
                Santri::where('id_santri', $id_santri)->update([
                    'ktp_santri' => $ktpSantriName,
                ]);
            }

            if ($request->hasFile('kk_santri')) {
                $kkSantri = $request->file('kk_santri');
                $kkSantriName = $kkSantri->getClientOriginalName();
                $kkSantri->move(public_path('berkas_santri/kk_santri'), $kkSantriName);
                Santri::where('id_santri', $id_santri)->update([
                    'kk_santri' => $kkSantriName,
                ]);
            }

            // Perbarui data santri
            Santri::where('id_santri', $id_santri)->update([
                'nama_santri' => $request->input('nama_santri'),
                'tempat_tanggal_lahir_santri' => $request->input('tempat_tanggal_lahir_santri'),
                'jenis_kelamin_santri' => $request->input('jenis_kelamin_santri'),
                'alamat_santri' => $request->input('alamat_santri'),
                'no_hp_santri' => $request->input('no_hp_santri'),
                'email_santri' => $request->input('email_santri'),
                'status_santri' => $request->input('status_santri'),
                'nama_wali_santri' => $request->input('nama_wali_santri'),
                'no_hp_wali_santri' => $request->input('no_hp_wali_santri'),
                'id_admin' => auth()->user()->id_admin,
            ]);

            return redirect()->route('santri')->with('success', 'Data santri berhasil diubah.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
        
    }   

    public function delete_data($id_santri)
    {
        try {
            // Temukan data pengeluaran berdasarkan ID
            $santri = Santri::where('id_santri',$id_santri);

            // Pastikan pengeluaran ditemukan
            if (!$santri) {
                throw new \Exception('Santri tidak ditemukan.');
            }

            // Hapus data pengeluaran
            $santri->delete();

            return redirect()->back()->with('success', 'Santri berhasil dihapus.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
}
