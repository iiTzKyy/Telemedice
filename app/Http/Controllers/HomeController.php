<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function rujukan(){
        $response_rs = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals') ;
        $data_rs = $response_rs->json();
        return view('admin.rujukan', compact('data_rs'));
    }
}
