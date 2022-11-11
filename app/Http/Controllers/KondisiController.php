<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modeltest;
use App\Models\User;
use App\Models\kondisi;
use Illuminate\Support\Facades\DB;

class KondisiController extends Controller
{
    public function index(){
   	    $datauser = DB::table('users')->paginate(10);
        return view('administrasi/datauser',['datauser' => $datauser]);
    }

    public function lihat($id)
    {
        $detailuser= User::find($id);
        return view('administrasi/datauser-detail',['detailuser' => $detailuser]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $datauser = DB::table('users')->where('name','like',"&".$cari."&")->paginate(2);
        return view('administrasi/datauser',['datauser' => $datauser]);
    }
}
