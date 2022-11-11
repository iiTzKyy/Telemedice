@extends('layouts.dashboard')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-3">Edit Profil</h1>
                        <label class="mb-5">Isi profil sesuai dengan data diri anda.</label>
                        <div class="col-lg-8 ">
                            @foreach($users as $p)
                            @if ($p->id == Auth::user()->id)
                            <form action="{{route('profil_update')}}" method="POST" class="card px-2 py-2">
                            @method('put')
                            @csrf
                            <div class="mb-1 row">
                                <label for="namaUser" class="col-sm-3 col-form-label">Nama User</label>
                                <div class="col-sm-9 pr-2">
                                <input type="text" class="form-control" id="name" name="name" value="{{ ($p->name) }}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="namaLengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $p->fullname}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="golonganDarah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                
                                <div class="col-sm-9">
                                <select name="goldar" id="goldar" class="form-control">
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                </select>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="domisili" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" value="{{ $p->riwayat_penyakit}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="domisili" name="domisili" value="{{ $p->domisili}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="emailUser" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $p->email}}">
                                </div>
                            </div>                            
                            @endif
                            @endforeach
                            
                        </div>
                        <div class="d-grid gap-2 col-1 mt-4">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
@endsection
