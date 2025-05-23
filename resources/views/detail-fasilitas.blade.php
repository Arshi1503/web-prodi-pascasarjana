@extends('layouts.app')
@section('title', 'Kampus')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Detail Kampus</h1>
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
<section class="p-0">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-very-small-screen">
            <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="fw-700 ls-minus-2px !tw-text-gold" style="margin-top: 100px;">{{ $kampus->nama }}</h1>
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
            @if ($kampus && $kampus->gambar)
            <div class="image-container mb-3">
                <img src="{{ asset('storage/' . $kampus->gambar) }}" alt="{{ $kampus->nama }}" class="img-fluid">
            </div>
            @endif

            <!-- Nama dan Status -->
            <div class="section-text fs-18 mt-3 mb-3">
                <span class="fw-600 !tw-text-softgold">{{ $kampus->nama }}
            </div>
        </div>
        
        <!-- Kata Sambutan (Full-width) -->
        <div class="col-12">
            @if ($kampus && $kampus->deskripsi)
            <p class="section-text text-left !tw-text-gray-200">{!! $kampus->deskripsi !!}</p>
            @endif
        </div>
    </div>

        <!-- Fasilitas Kampus -->
        <div class="row mt-5">
                <div class="col-12">
                    <h4 class="text-center fw-700 tw-text-gold">Fasilitas Kampus</h4>
                </div>
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" 
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        
                        <li class="grid-sizer"></li>
                        
                        <!-- Looping Fasilitas -->
                        @foreach ($kampus->fasilitas as $fasilitas)  
                        <li class="grid-item">
                            <div class="tw-bg-[#575757] tw-border tw-border-[#575757] tw-rounded-xl tw-overflow-hidden box-shadow-quadruple-large box-shadow-quadruple-large-hover" 
                                style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                
                                <div class="blog-image" style="overflow: hidden;">
                                    @if ($fasilitas->gambar)
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('storage/' . $fasilitas->gambar) }}" alt="{{ $fasilitas->nama }}') }}" alt="Lorem" 
                                            style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>    
                                    @endif
                                </div>
                          
                                
                                <div class="card-body p-12 lg-p-10" 
                                style="display: flex; flex-direction: column; justify-content: flex-start;">
                                    @if ($fasilitas->nama)
                                    <span class="fw-600 fs-20 d-inline-block mb-1 tw-text-softgold" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! $fasilitas->nama !!}
                                    </span>
                                    @endif
                            
                                    @if ($fasilitas->deskripsi)
                                    <p class="mb-0 tw-text-gray-300" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    {!! $fasilitas->deskripsi !!}
                                    </p>
                                    @endif    
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- End Looping Fasilitas -->
                        
                    </ul>
                </div>
            </div>
    </div>
</div>
{{-- end content --}}
@endsection