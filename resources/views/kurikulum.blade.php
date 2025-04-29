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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Kurikulum</h1>
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
{{-- start card --}}
        <section>
            <div class="tw-space-y-20">
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Kurikulum Program Studi Teknik Informatika</h3>
                        @if($kurikulum && $kurikulum->teks)
                        <p class="tw-card-subtitle">{!! $kurikulum->teks !!}</p>
                        @endif
                        @if ($kurikulum && $kurikulum->foto)
                        <div class="tw-mt-6 tw-mb-6 tw-w-full md:tw-max-w-full tw-flex tw-justify-center tw-items-center animation-float tw-overflow-hidden tw-relative" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <img class="tw-w-full lg:tw-w-1/2 tw-transition-transform lg:hover:tw-scale-110 hover:tw-scale-105 hover:tw-duration-500 active:tw-scale-90 hover:tw-ease-linear" src="{{ asset('storage/' . $kurikulum->foto) }}">
                        </div>
                        @endif
                    </div>
                </div>
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Struktur Kurikulum</h3>
                        <p class="tw-card-subtitle tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Struktur kurikulum Program Studi Administrasi Bisnis Universitas Wanita Internasional dirancang untuk membekali mahasiswa dengan pengetahuan dan keterampilan yang dibutuhkan dalam bidang teknologi informasi. Kurikulum ini mengintegrasikan pembelajaran teori dan praktik secara seimbang, dengan perhatian khusus pada pengembangan kompetensi dasar yang relevan dengan kebutuhan industri digital dan masyarakat modern.</p>
                        {{-- Start Table Nav --}}
                        <div class="tw-tab-nav tw-flex tw-flex-wrap tw-gap-2 tw-justify-center tw-p-2 tw-rounded-md">
                            <button class="tab-button tw-tab-nav-active" data-tab="semester-1"> Semester 1</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-2"> Semester 2</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-3"> Semester 3</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-4"> Semester 4</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-5"> Semester 5</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-6"> Semester 6</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-7"> Semester 7</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-8"> Semester 8</button>
                        </div>
                        {{-- End Table Nav --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-1">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total_sks = 0;    
                                        @endphp
                                        @foreach ($semester1 as $item )
                                        <tr class="tw-table-row">
                                            @if($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>    
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>    
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-2">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total_sks = 0;
                                        @endphp
                                        @foreach ($semester2 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)        
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>    
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp    
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-3">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester3 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px]tw-text-center">{!! $item->kode_mata_kuliah !!}</td>    
                                            @endif
                                            @if ($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-4">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester4 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-5">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester5 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-6">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester6 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-7">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester7 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-8">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semester8 as $item )
                                        <tr class="tw-table-row">
                                            @if ($item->kode_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center">{!! $item->kode_mata_kuliah !!}</td>
                                            @endif
                                            @if($item->nama_mata_kuliah)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->nama_mata_kuliah !!}</td>
                                            @endif
                                            @if ($item->sks)
                                            <td class="tw-px-6 tw-py-4 tw-text-center">{!! $item->sks !!}</td>
                                            @php $total_sks += $item->sks; @endphp
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : {{ $total_sks }}</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                </div>
                
            </div>
            {{-- Start Card --}}
            <div class="tw-card" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h3 class="tw-card-title">Standar Kompentensi Lulusan</h3>

                @if ($standarKompetensiLulusan ->first() && $standarKompetensiLulusan->first()->teks)
                <p class="tw-card-subtitle">{!! $standarKompentensiLulusan->first()->teks !!}</p>
                @endif
                {{-- Start Table--}}
                <div class="tw-p-4">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Deskripsi</th>
                            </tr>
                          </thead>
                          <tbody>
                                @php
                                 $counter = 1;
                                 $subCounter = 1;
                                @endphp
                            @foreach ($standarKompetensiLulusan as $item )
                            <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subCounter++ }}</td>
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
                {{-- End Table--}}
                {{-- End Card --}}
                {{-- Start Card --}}
                <div class="tw-card" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="tw-card-title">Capaian Pembelajaran Lulusan (CPL)</h3>
                    @if ($capaianPembelajaran->first() && $capaianPembelajaran->first()->teks)
                    <p class="tw-card-subtitle">{!! $capaianPembelajaran->first()->teks !!}</p>
                    @endif
                    {{-- Start Table--}}
                    <div class="tw-p-4">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pl-3 tw-py-3" style="width: 4%">No</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                 $counter = 2;
                                 $subcounter= 1;
                                @endphp
                                @foreach ($capaianPembelajaran as $item )
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subcounter++ }}</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                    {!! $item->deskripsi !!}</td>
                                </tr>
                                @endforeach
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                    Lorem ipsum</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        {{-- End Table --}}
                        {{-- Start Tab Nav --}}
                        <div class="tw-tab-nav tw-flex tw-flex-wrap tw-gap-2 tw-justify-center tw-p-2 tw-rounded-md">
                            <button class="tab-button tw-tab-nav-active" data-tab="sikap">Sikap</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="pengetahuan">Pengetahuan</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="keterampilan-umum">Keterampilan Umum</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="keterampilan-khusus">Keterampilan Khusus</button>
                        </div>
                        {{-- End Table Nav --}}
                        {{-- Start Tab Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4" id="sikap" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3" style="width: 5%">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 3;
                                            $subCounter = 1;
                                        @endphp
                                        @foreach ($sikapCPL as $item )
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subCounter++ }}</td>
                                            @if ($item->indikator)
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                {!! $item->indikator !!}
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="pengetahuan">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3"  style="width: 5%">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 4;
                                            $subCounter = 1;
                                        @endphp
                                        @foreach ($pengetahuanCPL as $item )
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subCounter++ }}</td>
                                            @if ($item->indikator)
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                {!! $item->indikator !!}
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="keterampilan-umum">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3" style="width: 5%">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 5;
                                            $subCounter = 1;
                                        @endphp
                                        @foreach ($keterampilanUmumCPL as $item )
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subCounter++ }}</td>
                                            @if ($item->indikator)
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                {!! $item->indikator !!}
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                            {{-- Start Table Content --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="keterampilan-khusus">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr>
                                            <th scope="col" class="tw-pl-3 tw-py-3" style="width: 5%">No</th>
                                            <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Indikator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 6;
                                            $subCounter = 1;
                                        @endphp
                                        @foreach ($keterampilanKhususCPL as $item )
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter}} . {{ $subCounter++ }}</td>
                                            @if ($item->indikator)
                                            <td class="tw-px-3 tw-py-4 tw-text-justify">
                                                {!! $item->indikator !!}
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            {{-- End Table Content --}}
                    @if ($kompetensi->first() && $kompetensi->first()->teks)
                    <p class="tw-card-subtitle">{!! $kompetensi->first()->teks !!}</p>
                    @endif

                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                            <thead class="tw-table-head">
                                <tr>
                                    <th scope="col" class="tw-pl-3 tw-py-3" style="width: 5%">No</th>
                                    <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($kompetensi as $item )
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter++ }}</td>
                                    @if ($item->deskripsi)
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                    {!! $item->deskripsi !!}
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    {{-- End Card --}}
                    {{-- Start Card --}}
                <div class="tw-card">
                    <h3 class="tw-card-title">Sasaran Kualitas Dosen, Mahasiswa dan Lulusan</h3>
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                            <thead class="tw-table-head">
                                <tr>
                                    <th scope="col" class="tw-pl-3 tw-py-3" style="width: 5%">No</th>
                                    <th scope="col" class="tw-pl-3 tw-py-3 tw-text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($sasaranKualitas as $item )
                                <tr class="tw-table-row">
                                    <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter++ }}</td>
                                    @if ($item->deskripsi)
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">
                                    {!! $item->deskripsi !!}
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tw-card">
                    <h3 class="tw-card-title">Tracer Study</h3>
                    <p class="tw-card-subtitle tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque voluptas beatae nostrum rerum vero, modi autem totam similique ducimus voluptatem tenetur magnam iste recusandae corporis explicabo, cupiditate quo perspiciatis?</p>
                </div>

            </div>
    </section>
@endsection