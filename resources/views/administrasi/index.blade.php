@extends('administrasi.dashboard')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Halaman Utama</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Covid-19 Indonesia</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body"><i class="fa fa-user"></i> Positif</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">6.453.864</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4 ">
                            <div class="card-body"><i class="fa fa-medkit"></i> Sembuh</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">6.278.113</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body align-text-center"><i class="fa fa-flag"></i> Vaksinasi</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">204.752.312</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body align-text-center"><i class="fa fa-user"></i> Jumlah User</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">{{$totaluser}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </main>
    </div>
</div>
@endsection