<?php

namespace App\Http\Controllers;

use App\Models\JenisIuran;
use App\Models\MasterAdmin;
use Illuminate\Http\Request;

class MasterAdminController extends Controller
{
    public function index()
    {
        $data['title'] = 'Master Admin';

        $daftar_ulang = MasterAdmin::first()->pluck('pembayaran_daftar_ulang')->first();
        $tamrin = MasterAdmin::first()->pluck('pembayaran_tamrin')->first();
        $jenis_iurans = JenisIuran::get();

        return view('auth.master.master_admin', [
            'daftar_ulang' => $daftar_ulang,
            'tamrin' => $tamrin,
            'jenis_iurans' => $jenis_iurans,
        ], $data);
    }

    public function edit_data(Request $request)
    {
        $daftar_ulang = $request->input('daftar_ulang');
        $tamrin = $request->input('tamrin');
        $jenis_iuran = $request->input('pembayaran_jenis_iuran');

        if ($daftar_ulang !== null) {
            try {
                MasterAdmin::first()->update([
                    'pembayaran_daftar_ulang' => $request->input('daftar_ulang'),
                ]);
                return redirect()->back()->with('success', 'Data berhasil diubah.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
            }
        } elseif ($tamrin !== null) {
            try {
                MasterAdmin::first()->update([
                    'pembayaran_tamrin' => $request->input('tamrin'),
                ]);
                return redirect()->back()->with('success', 'Data berhasil diubah.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
            }
        } elseif ($jenis_iuran !== null) {
            try {
                JenisIuran::first()->update([
                    'pembayaran_jenis_iuran' => $request->input('pembayaran_jenis_iuran'),
                ]);
                return redirect()->back()->with('success', 'Data berhasil diubah.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
            }
        }
    }

    public function create_data(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'jenis_iuran' => 'required|not_in:Jenis Iuran',
                'pembayaran_jenis_iuran' => 'required',
            ], [
                'jenis_iuran.not_in' => 'Pilih jenis iuran terlebih dahulu!',
            ]);

            // Buat data pembayaran
            $jenis_iuran = JenisIuran::create([
                'jenis_iuran' => $request->input('jenis_iuran'),
                'pembayaran_jenis_iuran' => $request->input('pembayaran_jenis_iuran'),
            ]);

            return redirect()->back()->with('success', 'Jenis Iuran berhasil ditambahkan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

}
