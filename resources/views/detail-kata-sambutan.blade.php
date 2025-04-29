@extends('layouts.app')
@section('title', 'Kata Sambutan')

@section('content')

<!-- start page title -->
<section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
    <img src="{{asset('images/gambar/iwupaster.jpg')}}" alt=""
    class="tw-absolute tw-inset-0 tw-w-full tw-h-full tw-object-cover tw-z-0">
    <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Kata Sambutan</h1>
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
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                    <!-- Foto -->
                    @if ($pimpinanStaff && $pimpinanStaff->foto)
                    <div class="image-container mb-3">
                        <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="{{ $pimpinanStaff->nama }}" class="img-fluid">
                    </div>
                    @endif

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">{{ $pimpinanStaff->nama }}</span>, {{ $pimpinanStaff->status }}
                    </div>
                </div>
                
                <!-- Kata Sambutan (Full-width) -->
                <div class="col-12">
                    @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                    <p class="section-text text-left">{!! $pimpinanStaff->kata_sambutan !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection