<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterGuestController extends Controller
{
    public function index()
    {
        $data['title'] = 'Master Guest';
        
        return view('auth.master.master_guest',[

        ], $data);
    }
}
