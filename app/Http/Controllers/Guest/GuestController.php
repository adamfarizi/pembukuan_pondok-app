<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        return view('guest.beranda.beranda', $data);
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
