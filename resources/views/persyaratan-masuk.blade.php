@extends('layouts.app')
@section('title', 'Pesyaratan Masuk')

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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Persyaratan Masuk</h1>
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
                    <h3 class="tw-card-title">Persyaratan Masuk</h3>
                    <p class="tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Untuk dapat diterima sebagai mahasiswa Program Studi Administrasi Bisnis di Universitas Wanita Internasional, calon mahasiswa harus memenuhi persyaratan sebagai berikut:</p>
                    <div class="tw-overflow-x-auto">
                        <div class="tw-overflow-x-auto">
                            <table class="tw-table">
                              <thead class="tw-table-head">
                                <tr>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center" style="width: 8%">No</th>
                                  <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Persyaratan Masuk</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($persyaratanMasuk as $item)
                                <tr class="tw-table-row">
                                    <td class="tw-px-3 tw-py-4 tw-text-center">	
                                    {{ $counter++ }}</td>
                                    @if ($item->persyaratan)
                                    <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                        {{ $item->persyaratan }}</td>
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
    </section>    
{{-- end card --}}
@endsection