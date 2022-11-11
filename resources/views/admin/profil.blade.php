@extends('layouts.dashboard')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-3">Profil Pengguna</h1>
                        <label class="mb-5">Lengkapi profil anda, agar kami dapat membantu anda dengan lebih baik.</label>
                        <div class="col-lg-8">
                            @if (Auth::user()->id)
                            <div class="card px-2 py-2">
                            <div class="mb-1 row">
                                <label for="namaUser" class="col-sm-3 col-form-label">Nama User</label>
                                <div class="col-sm-9 pr-2">
                                <input type="text" readonly class="form-control" id="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="namaLengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" readonly class="form-control" id="fullname" value="{{Auth::user()->fullname}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="golonganDarah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                <div class="col-sm-9">
                                <input type="text" readonly class="form-control" id="goldar" value="{{Auth::user()->goldar}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="domisili" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-9">
                                <input type="text" readonly class="form-control" id="riwayat_penyakit" value="{{Auth::user()->riwayat_penyakit}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                                <div class="col-sm-9">
                                <input type="text" readonly class="form-control" id="domisili" value="{{Auth::user()->domisili}}">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="emailUser" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                <input type="text" readonly class="form-control" id="email" value="{{Auth::user()->email}}">
                                </div>
                            </div>                            
                            @endif
                        </div>
                        <div class="d-grid gap-2 col-2 mt-4">
                            <a href="{{ url('/profil_update') }}" class="btn btn-primary" type="button" >Edit</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection
