<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use CreateArtikelsTable;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view('artikel',[
            "judul" => "Artikel",
            "Artikel" => Artikel::all()
        ]);
    }
    public function show($slug)
    {
        return view('artikelpost', [
            "judul" => "Single Artikel",
            "artikel" => Artikel::find($slug)
        ]);
    }
}
