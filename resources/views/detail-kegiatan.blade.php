@extends('layouts.app')
@section('title', 'Kegiatan')

@section('content')

<!-- start page title -->
<section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
    <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Detail Kegiatan</h1>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<section class="page-title-section" style="padding-top: 120px; padding-bottom: 0px;">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-very-small-screen">
            <div class="col-xl-10 col-lg-11 text-center position-relative page-title-extra-large"
                data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                
                @if ($publikasi && $publikasi->judul)
                <h3 class="fw-700 text-dark-gray ls-minus-2px mb-3 !tw-text-softgold" style="word-break: break-word;">
                    {!! $publikasi->judul !!}
                </h3>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 d-flex flex-column align-items-center text-center">
            <!-- Foto -->
            @if ($publikasi && $publikasi->gambar)
            <div class="image-container mb-3">
                <img src="{{ asset('storage/' . $publikasi->gambar) }}" alt="{{ $publikasi->gambar }}" class="img-fluid">
            </div>
            @endif

            <!-- Nama dan Status -->
            <div class="section-text fs-18 !tw-text-gray-300 mt-3 mb-3">
                <span class="fw-600">{{ \Carbon\Carbon::parse($publikasi->waktu)->translatedFormat('d F Y') }}</span>
            </div>
        </div>
            <!-- Kata Sambutan (Full-width) -->
            <div class="col-12">
                @if ($publikasi && $publikasi->deskripsi)
                <div class="tw-text-gray-200">
                    <p class="section-text text-left">{!! $publikasi->deskripsi !!}</p>
                </div>
                @endif
            </div>
    </div>
</div>
@endsection