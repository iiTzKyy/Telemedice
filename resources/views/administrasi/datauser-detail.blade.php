@extends('administrasi.dashboard')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Detail Kondisi Pengguna</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user"></i>
                                Profil Pengguna
                            </div>
                            <div class="card-body">
                            <table class="table table-responsive table-bordered mt-3 px-2">
                                    <thead>
                                        <tr>
                                            <th class="table-secondary" width="250px">Nama</th>
                                            <td class="text-left">{{ $detailuser->name }}</td>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Nama Lengkap</th>
                                            <td class="text-left">{{ $detailuser->fullname }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Golongan Darah</th>
                                            <td class="text-left">{{ $detailuser->goldar }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Riwayat Penyakit</th>
                                            <td class="text-left">{{ $detailuser->riwayat_penyakit }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Domisili</th>
                                            <td class="text-left">{{ $detailuser->domisili }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Email</th>
                                            <td class="text-left">{{ $detailuser->email }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Riwayat Perjalanan</th>
                                            <td class="text-left">{{ $detailuser->riwayat }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Kontak Fisik Dengan Pasien</th>
                                            <td class="text-left">{{ $detailuser->fisik }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th class="table-secondary">Keluarga Terindikasi Positif</th>
                                            <td class="text-left">{{ $detailuser->keluarga }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="card mb-4 ">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Tes Terakhir
                            </div>
                            <div class="card-body kartu">
                                <table class="table table-bordered table-responsive">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Nama</th>
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
                                            <td>{{$detailuser->fullname}}</td>
                                            <td>{{$detailuser->batuk}}</td>
                                            <td>{{$detailuser->sesak}}</td>
                                            <td>{{$detailuser->demam}}</td>
                                            <td>{{$detailuser->kepala}}</td>
                                            <td>{{$detailuser->nyeri}}</td>
                                            <td>{{$detailuser->tenggorokan}}</td>
                                            @if ($detailuser->saturasi < 180)
                                            <td class="table-danger">{{$detailuser->saturasi}}</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th >Nilai Skala Total Dari Hasil Tes Terakhir</th>
                                            <th class="visually-hidden">{{$total=$detailuser->batuk+$detailuser->sesak+$detailuser->demam+$detailuser->kepala+$detailuser->nyeri+$detailuser->tenggorokan}}</th>
                                            @if ($total >= 21 && $total <=25)
                                            <th class="table-warning">{{$total}}</th>
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
                                            <td class="text-center">Aman</td>
                                            <td class="text-center">Cukup Aman</td>
                                            <td class="text-center">Cukup Mengkhawatirkan</td>
                                            <td class="text-center">Mengkhawatirkan</td>
                                            <td class="text-center">Segera Hubungi Rumah Sakit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection
