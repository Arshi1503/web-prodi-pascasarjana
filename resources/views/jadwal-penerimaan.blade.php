@extends('layouts.app')
@section('title', 'Jadwal Penerimaan')

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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Jadwal Penerimaan</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Pendaftaran</li>
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
                    <h3 class="tw-card-title">Jadwal Penerimaan</h3>
                    @if ($jadwalPenerimaan && $jadwalPenerimaan->teks)
                    <p class="tw-card-subtitle">{!! $jadwalPenerimaan->teks !!}</p>
                    @endif
                    <div class="tw-overflow-x-auto">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center tw-w-1/5">Keterangan</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Tanggal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Pendaftaran Sampai Dengan</td>
                                    @if ($jadwalPenerimaan && $jadwalPenerimaan->pendaftaran_sampai_dengan)
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                        {{ \Carbon\Carbon::parse($jadwalPenerimaan->pendaftaran_sampai_dengan)->translatedFormat('d F Y') }}    
                                    </td>
                                    @endif
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Tes</td>
                                    @if ($jadwalPenerimaan && $jadwalPenerimaan->tes)
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                        {{ \Carbon\Carbon::parse($jadwalPenerimaan->tes)->translatedFormat('d F Y') }}    
                                    </td>
                                    @endif
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Pengumunman Hasil Tes</td>
                                    @if ($jadwalPenerimaan && $jadwalPenerimaan->pengumuman_hasil_tes)
                                        <td class="tw-px-3 tw-py-4 tw-text-center">	
                                            {{ \Carbon\Carbon::parse($jadwalPenerimaan->pengumunman_hasil_tes)->translatedFormat('d F Y') }}    
                                        </td>
                                    @endif
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Masa Orientasi</td>
                                    @if ($jadwalPenerimaan && $jadwalPenerimaan->masa_orientasi)
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                        {{ \Carbon\Carbon::parse($jadwalPenerimaan->masa_orientasi)->translatedFormat('d F Y') }}    
                                    </td>
                                    @endif
                                </tr>
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    Perkuliahan Perdana</td>
                                    @if ($jadwalPenerimaan && $jadwalPenerimaan->perkuliahan_perdana)
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                        {{ \Carbon\Carbon::parse($jadwalPenerimaan->perkuliahan_perdana )->translatedFormat('d F Y') }}    
                                    </td>
                                    @endif
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                </div>
            </div>
            {{-- End Card --}}
    </section>    
{{-- end card --}}
@endsection