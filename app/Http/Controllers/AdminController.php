<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Modeltest;

class AdminController extends Controller
{
    public function index()
    {
        $profiluser = DB::table('users')->get();
        $totaluser = DB::table('users')->count();
        // return $kondisi;
        return view('admin.index', compact('profiluser','totaluser'));
        
    }
    public function administrator(){
        $profiluser = DB::table('users')->get();
        $totaluser = DB::table('users')->count();
        // return $kondisi;
        return view('administrasi.index', compact('profiluser','totaluser'));
    }

}
