@extends('layouts.dashboard')

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
                            <div class="card-body align-text-center"><i class="fa fa-flag"></i> Vaksinasi Ke-1</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">204.752.312</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body align-text-center"><i class="fa fa-flag"></i> Vaksinasi Ke-2</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="small text-white">171.380.835</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Tes Terakhir
                    </div>
                    @foreach ($profiluser as $item)
                    @if ($item->id == Auth::user()->id)
                    <div class="card-body">
                        <div class="mb-2 row">
                            <label for="riwayat" class="row-sm-3 row-form-label"><strong>Riwayat
                                    Perjalanan</strong></label>
                            <div class="row-sm-9">
                                <input type="text" readonly class="form-control" id="riwayat"
                                    value="{{Auth::user()->riwayat}}">
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="riwayat" class="row-sm-3 row-form-label"><strong>Kontak Fisik Dengan Terindikasi
                                    Positif</strong></label>
                            <div class="row-sm-9">
                                <input type="text" readonly class="form-control" id="fisik"
                                    value="{{Auth::user()->fisik}}">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="riwayat" class="row-sm-3 row-form-label"><strong>Anggota Keluarga Yang
                                    Terindikasi Positif</strong></label>
                            <div class="row-sm-9">
                                <input type="text" readonly class="form-control" id="keluarga"
                                    value="{{Auth::user()->keluarga}}">
                            </div>
                        </div>
                        <div class=" row">
                            <label><strong>Kondisi Tubuh</strong></label>
                        </div>
                        <table class="table table-bordered table-responsive mt-2">
                            <thead class="table-primary">
                                <tr>
                                    <th>Batuk</th>
                                    <th>Sesak Nafas</th>
                                    <th>Demam</th>
                                    <th>Sakit Kepala</th>
                                    <th>Pegal Pegal</th>
                                    <th>Sakit Tenggorokan</th>
                                    <th>Saturasi Oksigen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{Auth::user()->batuk}}</td>
                                    <td>{{Auth::user()->sesak}}</td>
                                    <td>{{Auth::user()->demam}}</td>
                                    <td>{{Auth::user()->kepala}}</td>
                                    <td>{{Auth::user()->nyeri}}</td>
                                    <td>{{Auth::user()->tenggorokan}}</td>
                                    @if (Auth::user()->saturasi > 180)
                                    <td class="table-danger">{{Auth::user()->saturasi}}</td>
                                    @else
                                    <td>{{Auth::user()->saturasi}}</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <div class="visually-hidden">
                                        {{$total=$item->batuk+$item->sesak+$item->demam+$item->kepala+$item->nyeri+$item->tenggorokan}}
                                    </div>

                                    <th>Nilai Skala Total Dari Hasil Tes Terakhir</th>
                                    @if ($total >= 21 && $total <=25) <th class="table-warning">{{$total}}</th>
                                        @elseif ($total >= 26)
                                        <th class="table-danger">{{$total}}</th>
                                        @else
                                        <th class="">{{$total}}</th>
                                        @endif
                                </tr>
                            </thead>
                        </table>
                        <div class="small mt-5">
                            Keterangan :
                        </div>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th class="table-primary">Nilai</th>
                                    <td class="text-center">5 - 10</td>
                                    <td class="text-center">11 - 15</td>
                                    <td class="text-center">16 - 20</td>
                                    <td class="text-center">21 - 25</td>
                                    <td class="text-center">26 - 30</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="table-primary">Keterangan</th>
                                    <td class="text-center table-info">Aman</td>
                                    <td class="text-center table-success">Cukup Aman</td>
                                    <td class="text-center table-warning">Cukup Mengkhawatirkan</td>
                                    <td class="text-center table-warning">Mengkhawatirkan</td>
                                    <td class="text-center table-danger">Segera Hubungi Rumah Sakit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @endif
                    @endforeach
                </div>
            </div>
        </main>
    </div>
</div>
@endsection