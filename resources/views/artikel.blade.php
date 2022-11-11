@extends('layouts.app')

@section('content')
        <!--Services-->
        <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artikel</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                @foreach ($Artikel as $artikels)
                <article>
                    <h2><a href="/Artikel/{{ $artikels['slug'] }}">{{ $artikels["judul"]   }}</a></h2>
                    <p>{{$artikels["body"]}}</p>
                </article>
                @endforeach
            </div>
        </section>
@endsection