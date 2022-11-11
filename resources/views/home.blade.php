@extends('layouts.app')

@section('content')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di</div>
                <div class="masthead-heading text-uppercase">Telemedicine</div>
                @guest
                @if (Route::has('register'))
                <a class="btn btn-dark btn-lg" href="{{ route('login') }}">Login</a>
                @endif
                @else
                @if (auth()->user()->level=="admin")
                <a class="btn btn-dark btn-lg " href="{{ route('administrator') }}">{{ __('Dashboard') }}</a>
                @endif
                @if (auth()->user()->level=="user")
                <a class="btn btn-dark btn-lg " href="{{ route('profil') }}">{{ __('Dashboard') }}</a>
                @endif
                @endguest
            </div>
        </header>
        <!-- Services-->
        <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mengapa Telemedicine ?</h2>
                    <h3 class="section-subheading text-muted">Mengapa Menggunakan Website Kami ?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-thermometer-half fa-stack-1x fa-inverse" aria-hidden="true"></i>
                        </span>
                        <h4 class="my-3">Awasi</h4>
                        <p class="text-muted">Awasi Kondisi Kesehatanmu Dengan Melakukan Pengecekan Berkala dan Teratur</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-user-md fa-stack-1x fa-inverse" aria-hidden="true"></i>
                        </span>
                        <h4 class="my-3">Bantuan Langsung</h4>
                        <p class="text-muted">Dapatkan Bantuan Langsung Dari Tempat Relawan Kami</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-newspaper fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Artikel Terkait</h4>
                        <p class="text-muted">Update Perkembangan Terkini Dari Kondisi Sosial Sekitar Melalu Artikel Artikel Yang Tersedia</p>
                    </div>
                </div>
            </div>
        </section>
        
@endsection