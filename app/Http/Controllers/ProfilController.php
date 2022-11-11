<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$profiluser = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.profil',['users' => $profiluser]);
 
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
    public function edit(Request $request)
    {
        $profiluser = DB::table('users')->get();

        return view('admin.profil_update', [
            'users' => $profiluser
        ]);
    }

    public function update(Request $request)
    {
    $request->user()->update(
        $request->all()
    );

    return redirect()->route('profil');
    }

    public function hapus($id)
    {
        $post   = user::find($id);
        $post->delete();

        return view('administrasi.datauser');
    }

    
}
