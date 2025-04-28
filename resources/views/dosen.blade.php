@extends('layouts.app')
@section('title', 'Tentang Kami')

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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Dosen</h1>
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
<section>
    <div class="tw-card">
        <h3 class="tw-mb-6 tw-text-center tw-text-black">Dosen dan Staf Prodi Teknik Informatika</h3>
        
        <!-- Container Grid -->
        <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 lg:tw-grid-cols-3 xl:tw-grid-cols-4 tw-gap-6 tw-justify-items-center">
            <!-- Card Dosen 1 -->
            @foreach ($pimpinanStaff as $item)
            <div class="tw-bg-white tw-shadow-md tw-rounded-lg tw-p-4 tw-flex tw-flex-col tw-items-center tw-relative tw-overflow-hidden">
                @if ($item->foto)
                <a href="{{ route('detail-dosen', ['id' => $item->id]) }}" class="tw-overflow-hidden tw-rounded-lg">
                <img class="tw-w-full tw-object-cover tw-rounded-lg tw-transition-transform lg:hover:tw-scale-110 hover:tw-scale-105 hover:tw-duration-700 active:tw-scale-90 hover:tw-ease-linear" src="{{ asset('storage/' . $item->foto) }}" alt="Dosen 1"></a>
                @endif
                @if ($item->nama)
                <a href="{{ route('detail-dosen', ['id' => $item->id]) }}">
                    <span class="tw-mt-6 tw-text-xl tw-text-[#BC8947] tw-text-center">{!! $item->nama !!}</span>
                </a>  
                @endif
                @if ($item->status)
                <p class="tw-mt-2 tw-text-lg tw-text-gray-600t tw-text-center">{!! $item->status !!}</p>    
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection