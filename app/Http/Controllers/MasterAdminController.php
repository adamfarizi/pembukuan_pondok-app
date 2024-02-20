<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterAdminController extends Controller
{
    public function index()
    {
        $data['title'] = 'Master Admin';
        
        return view('auth.master.master_admin',$data);
    }
}
