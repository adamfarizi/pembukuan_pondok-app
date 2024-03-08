<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        $totalsantri = Santri::count();

        $imageFiles = glob(public_path('images/pondok/area_pondok/*'));
        $imageFiles = array_diff($imageFiles, ['.', '..']);
        $imageNames = [];
        foreach ($imageFiles as $imageFile) {
            $imageNames[] = basename($imageFile);
        }

        return view('guest.beranda.beranda', [
            'total_santri' => $totalsantri,
            'imageNames' => $imageNames,
        ], $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $request->session()->regenerate();
            return redirect('beranda');
        } else {
            return redirect('/')->withErrors('Email dan Password anda salah!')->withInput();
        }
    }
}
