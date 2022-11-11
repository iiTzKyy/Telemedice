@extends('layouts.dashboard')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Rumah Sakit Rujukan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Data Rumah Sakit Rujukan Seluruh Indonesia</li>
                    </ol>
                </div>
                <main>
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-hospital me-1"></i>
                                Tabel Rumah Sakit
                            </div>
                            
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="table-dark">Name</th>
                                            <th class="table-dark">Alamat</th>
                                            <th class="table-dark">Region</th>
                                            <th class="table-dark">Nomor Telpon</th>
                                            <th class="table-dark">Provinsi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data_rs as $datars)
                                    <tbody>
                                        <tr>
                                            <td>{{$datars['name']}}</td>
                                            <td>{{$datars['address']}}</td>
                                            <td>{{$datars['region']}}</td>
                                            <td>{{$datars['phone']}}</td>
                                            <td>{{$datars['province']}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                
                        </div>
                    </div>
                    </div>
                </main>
            </div>
        </div>
@endsection