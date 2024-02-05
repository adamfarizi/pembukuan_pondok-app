<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Santri';
    
        $search_all = $request->input('search_all');
        $perPage_santri = $request->input('perPage_santri', 10);
        $query = Santri::when($search_all, function ($query) use ($search_all) {
            $query->where('nama_santri', 'like', '%' . $search_all . '%')
                ->orWhere('tempat_tanggal_lahir_santri', 'like', '%' . $search_all . '%')
                ->orWhere('alamat_santri', 'like', '%' . $search_all . '%')
                ->orWhere('no_hp_santri', 'like', '%' . $search_all . '%')
                ->orWhere('email_santri', 'like', '%' . $search_all . '%')
                ->orWhere('nama_wali_santri', 'like', '%' . $search_all . '%')
                ->orWhere('no_hp_wali_santri', 'like', '%' . $search_all . '%');
        });
        if ($search_all) {
            $totalItems = $query->count();
            $santris = $query->paginate($totalItems, ['*'], 'santri');
        } else {
            $santris = $query->paginate($perPage_santri, ['*'], 'santri');
        }

        return view('auth.santri.santri', [
            'perPage_santri' => $perPage_santri,
            'santris' => $santris,
        ], $data);
    }
    
}
