@extends('layouts.app')
@section('title', 'Akademi')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Profil Lulusan</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Akademi</li>
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
            {{-- start card --}}
            <div class="tw-card tw-mb-12">
                <div>
                    <h3 class="tw-card-title">Profil Lulusan Administrasi Bisnis</h3>
                    @if ($profilLulusan->first() && $profilLulusan->first()->teks)
                    <span class="tw-card-subtitle">{!! $profilLulusan->first()->teks !!}</span>
                    @endif
                    <div class="tw-overflow-x-auto">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pl-3 tw-py-3" style="width: 8%">No</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center tw-w-1/5">Profil Lulusan</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3">Deskripsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                 $counter = 1;
                                @endphp
                                @foreach ($profilLulusan as $item)
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter++ }}</td>
                                    @if ($item->profil_lulusan)
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    {!! $item->profil_lulusan !!}</td>
                                    @endif
                                    @if ($item->deskripsi)
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                    {!! $item->deskripsi !!}</td>
                                    @endif
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Slider --}}
            <div class="row justify-content-center mb-3">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center tw-mx-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="tw-text-softgold ls-minus-1px tw-mx-auto">Testimoni Alumni</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-6 sm-mb-8 tw-mt-12" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="row justify-content-center align-items-center mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 position-relative ps-8 pe-8 lg-ps-15px lg-pe-15px">
                        <div class="swiper testimonials-style-06" data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                            <div class="swiper-wrapper">
                                <!-- start testimonial item -->
                                @foreach ($testimoniAlumni as $item)
                                <div class="swiper-slide">
                                    <div class="row align-items-center justify-content-center">
                                        @if ($item->foto)
                                        <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                            <img alt="" class="tw-rounded-xl" src="{{ asset('storage/' . $item->foto) }}">
                                        </div>
                                        @endif
                                        <div class="col-lg-5 last-paragraph-no-margin md:tw-text-start tw-text-center">
                                            @if($item->teks)
                                            <div class="mb-5px tw-block ls-1px fs-18 fw-500 !tw-text-gray-400">{!! $item->teks !!}</div>
                                            @endif
                                            @if ($item->nama)
                                            <span class="fs-15 text-uppercase fw-800 tw-text-softgold ls-1px">{!! $item->nama !!}</span>    
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end testimonial item --> 
                                <!-- start testimonial item -->
                                <!-- end testimonial item -->
                            </div>
                            <!-- start slider navigation -->
                            {{-- <div class="swiper-button-previous-nav swiper-button-prev md-left-0px"><i class="feather icon-feather-arrow-left icon-extra-medium tw-text-white"></i></div>
                            <div class="swiper-button-next-nav swiper-button-next md-right-0px"><i class="feather icon-feather-arrow-right icon-extra-medium tw-text-white"></i></div>
                            <!-- end slider pagination --> --}}
                        </div>
                    </div>
                </div>
              {{-- End Slider --}}     
            </div>         
    </section>    
{{-- end card --}}
@endsection