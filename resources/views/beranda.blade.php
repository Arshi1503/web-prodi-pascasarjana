@extends('layouts.app')


@section('title', 'Beranda')

@section('content')
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5">
            <img src="{{asset('images/gambar/banner.jpg')}}" alt=""
            class="tw-absolute tw-inset-0 tw-w-full tw-h-full tw-object-cover tw-z-0">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Administrasi Bisnis</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Beranda</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="pt-0 big-section tw-mt-10">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                        <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                            @if ($tentang && $tentang->thumbnail)
                                <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-8px w-100">
                            @endif
                            {{-- <img src="{{ asset('images/gambar/hero-3.jpg') }}" alt="" class="border-radius-8px w-100"> --}}
                        </div>
                        <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                        </div>
                    </div> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Apa yang Dipelajari dalam Administrasi Bisnis?</h3> 
                        @if ($tentang && $tentang->deskripsi)
                            <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">{!! $tentang->deskripsi !!}</p>
                        @endif
                        {{-- <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">Program Studi Ilmu Politik adalah program pendidikan tinggi yang mempelajari teori dan praktik politik, termasuk sistem pemerintahan, kekuasaan, kebijakan publik, hubungan internasional, partai politik, serta perilaku politik masyarakat. Mahasiswa diajak memahami dinamika sosial-politik di tingkat lokal, nasional, hingga global, serta dibekali keterampilan analisis kritis dan diplomasi.</p>  --}}
                        <a href="/tentang" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div> 
                </div> 
            </div>
        </section>  
        <!-- end section -->
        <!-- start section --> 
        <!-- end section -->
        <!-- start section --> 
        <section class="overlap-height">
            <div class="container overlap-gap-section">
                <div class="row justify-content-center mb-4 sm-mb-10"> 
                    <div class="col-xl-6 col-lg-7 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="fs-20 text-base-color">Tentang Kami</span>
                        <h3 class="alt-font fw-500 text-dark-gray w-80 xs-w-100 mx-auto ls-minus-1px">Visi, Misi, Tujuan</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 justify-content-center gap-4 justify-content-center" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start process step item -->
                    <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                        <i class="bi bi-bullseye text-dark-gray icon-large mb-20px"></i>
                        <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Visi</span>
                        @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                            <span>{!! $visiMisiTujuan->visi !!}</span>
                        @endif
                        {{-- <p>Menjadi Program Studi Ilmu Politik yang unggul dalam kajian politik lokal dan global, serta berkontribusi aktif terhadap pembangunan demokrasi yang berkeadaban.</p> --}}
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                        <i class="bi bi-list-task text-dark-gray icon-large mb-20px"></i>     
                        <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Misi</span>
                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                        <span>
                            {!! $visiMisiTujuan->misi[0]['text'] !!}
                        </span>
                        @endif
                        {{-- <p>Melakukan penelitian dan pengabdian kepada masyarakat di bidang politik, pemerintahan, dan kebijakan publik.</p> --}}
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="tw-p-4 tw-h-full tw-flex tw-flex-col tw-justify-between text-center process-step-style-02 hover-box last-paragraph-no-margin xs-mb-50px">
                        <i class="bi bi-stars text-dark-gray icon-large mb-20px"></i>  
                        <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Tujuan</span>
                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                        <span>
                            {!! $visiMisiTujuan->tujuan[0]['text'] !!}
                        </span>
                        @endif
                        {{-- <p>Membentuk lulusan yang memiliki integritas, etika, dan kepemimpinan dalam kehidupan bermasyarakat, berbangsa, dan bernegara.</p> --}}
                    </div>
                    <!-- end process step item -->
                </div>
                <div class="tw-mt-5 tw-flex tw-justify-center">
                    <a href="/visi-misi-tujuan" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                        Selengkapnya
                        <span class="bg-orient-blue text-white">
                            <i class="feather icon-feather-arrow-right icon-small"></i>
                        </span>
                    </a>
                </div>                         
            </div>
        </section>
        <!-- end section -->
        {{-- start section --}}
        <section class="pt-0 big-section tw-my-20">
            <div class="container">
                <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row tw-items-center tw-gap-4" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3> 
                        <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                                <p>{!! $pimpinanStaff->kata_sambutan !!}</p>
                            @endif
                            {{-- <p>Di tengah dunia yang semakin kompleks, peran Ilmu Politik menjadi sangat penting dalam memahami dinamika pemerintahan, demokrasi, dan hubungan internasional. Melalui kurikulum yang berorientasi pada praktik dan pemikiran kritis, kami berkomitmen mencetak lulusan yang tidak hanya cakap secara akademik, tetapi juga siap menjadi agen perubahan di masyarakat.</p>
                            <p>
                            Kami mengundang para generasi muda untuk bergabung, belajar, dan tumbuh bersama kami di lingkungan akademik yang inklusif, progresif, dan berpikiran global.
                            </p> --}}

                        </div>
                        
                        <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div>
                    <div class="col-lg-6 position-relative md-mt-14 sm-mt-17 xs-mt-23"> 
                        <div class="tw-flex tw-justify-center w-100" data-animation-delay="50">
                            @if ($pimpinanStaff && $pimpinanStaff->foto)
                                <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class=" border-radius-8px tw-w-[100%] md:tw-w-[60%]">                                  
                            @endif
                            {{-- <img src="{{ asset('images/gambar/alumni2.jpg') }}" alt="" class=" border-radius-8px tw-w-[100%] md:tw-w-[60%]"> --}}
                        </div>
                    </div> 
                </div> 
            </div>
        </section>  
        {{-- end section  --}}
        <!-- start section --> 
        <!-- end section -->
        <!-- start section -->
        <section class="py-0 tw-mb-10">
            <div class="container">        
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Berita Terkini</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                                <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            @if ($item->gambar)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                            @endif
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                            @if ($item->judul)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                            class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->judul, 90) !!}
                                            </a>
                                            @endif
                                            @if ($item->deskripsi)
                                            <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->deskripsi, 120) !!}
                                            </p>
                                            @endif
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    @if ($item->waktu)
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <!-- start blog list -->
                            {{-- <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list --> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection