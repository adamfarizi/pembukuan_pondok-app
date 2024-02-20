<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        return view('guest.beranda.beranda', $data);
    }
}
