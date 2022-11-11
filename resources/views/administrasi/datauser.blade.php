@extends('administrasi.dashboard')

@section('content')
        <di id="layoutSidenav">
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Pengguna</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Data Pengguna Aktif Telemedicine</li>
                    </ol>
                    <livewire:cari-data>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                            @livewireScripts
                            <script type="text/javascript">
                                document.getElementById('load-more').onclick = function() {
                                window.livewire.emit('cari-data');
                                };
                            </script>
                </div>
                
            </div>
        </div>
@endsection