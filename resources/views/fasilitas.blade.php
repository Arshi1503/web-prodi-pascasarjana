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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Fasilitas</h1>
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
{{-- start daftar kampus --}}
<div class="tw-space-y-6 p-6" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
    @foreach ($kampus as $item )
    <div class="tw-card">
        @if ($item->nama)
        <h4 class="tw-card-title">{!! $item->nama !!}</h4>    
        @endif
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-6">
            <!-- Gambar -->
            @if ($item->gambar)
            <img 
            class="tw-w-full lg:tw-max-w-lg md:tw-max-w-sm tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="{{asset('storage/' . $item->gambar)}}" 
            loading="lazy" 
            alt="Kampus 1">
            @endif
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                @if ($item->deskripsi)
                <span class="tw-text-justify tw-text-gray-200">{!! $item->deskripsi !!}</span>    
                @endif
                @if ($item->alamat)
                <span class="tw-block tw-mt-2 tw-text-gray-200"><span class="tw-font-semibold tw-text-softgold">Alamat: </span>{!! $item->alamat !!}    
                @endif
                @if ($item->nomor)
                <span class="tw-block tw-text-gray-200"><span class="tw-font-semibold tw-text-softgold">Kontak: </span>{!! $item->nomor !!}</span>    
                @endif
                <button type="button" class="tw-text-white tw-bg-[#BC8947] tw-my-3 hover:tw-bg-[#c9a06b] focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-[#c9a06b] tw-font-medium tw-rounded-full tw-text-sm tw-px-5 tw-py-2.5 tw-text-center tw-me-2 tw-mb-2"><a class="tw-text-white" href="{{ route('detail-fasilitas', ['id' => $item->id]) }}">Lihat Selengkapnya</a></button> 
            </div>            

            {{-- Button --}}
            
        </div>
    </div>
    @endforeach
</div>
{{-- end daftar kampus --}}
@endsection 