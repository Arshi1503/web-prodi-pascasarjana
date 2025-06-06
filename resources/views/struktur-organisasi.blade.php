@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
@vite(['resources/js/slider.js'])

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Struktur Organisasi</h1>
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
<!-- end page title -->
{{-- start card --}}
        <section class="tw-section-dark">
            <div class="tw-card" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="tw-card-title">Struktur Organisasi</h3>
                    @if ($strukturOrganisasi && $strukturOrganisasi->teks)
                    <p class="tw-card-subtitle">{!! $strukturOrganisasi->teks !!}</p>    
                    @endif
                </div>

                <div class="tw-mt-6 tw-mb-6 tw-w-full md:tw-max-w-full tw-flex tw-justify-center tw-items-center animation-float tw-overflow-hidden tw-relative" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    @if ($strukturOrganisasi && $strukturOrganisasi->foto)    
                        <img class="tw-w-full lg:tw-w-1/2 tw-transition-transform lg:hover:tw-scale-110 hover:tw-scale-105 hover:tw-duration-500 active:tw-scale-90 hover:tw-ease-linear" src="{{asset('storage/'. $strukturOrganisasi->foto)}}">
                    @endif
                </div>
            </div>
        </section>
{{-- end card --}}
@endsection