@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Pascasarjana</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Tentang Kami</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tw-border tw-border-x tw-border-primary tw-bg-primary">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 md-mb-9 sm-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px mb-15px">Tentang</span>
                        <h1 class="alt-font fw-600 tw-text-softgold ls-minus-2px !tw-mb-0 shadow-none" data-shadow-animation="true" data-animation-delay="700">Pascasarjana</h1>
                        <div class="row">
                            @if ($tentang && $tentang->deskripsi)
                            <div class="col-lg-12 mb-25px last-paragraph-no-margin">
                                <p class="w-85 md-w-95 sm-w-100">{!! $tentang->deskripsi !!} </p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative md-mb-6 sm-mb-50px">
                        <div class="overflow-hidden text-end w-80 ms-auto animation-float" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 0 }'>
                            @if ($tentang && $tentang->thumbnail)
                            <img src="{{asset('storage/' . $tentang->thumbnail )}}" alt="" class="w-80 border-radius-5px">    
                            @endif
                        </div>
                        <div class="position-absolute bottom-minus-50px w-60 atropos" data-atropos data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 500 }'>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                        <img class="w-100 border-radius-5px" data-atropos-offset="3" src="https://via.placeholder.com/450x367" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection