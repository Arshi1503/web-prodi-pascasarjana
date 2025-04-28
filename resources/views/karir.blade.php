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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Akreditasi</h1>
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
        <section>
            <div class="tw-card">
                <div>
                    <h3 class="tw-card-title">Karir</h3>
                    @if ($karir->first() && $karir->first->teks)
                    <p class="tw-card-subtitle">{!! $karir->first()->teks !!}</p>
                    @endif
                </div>

                <div class="tab-content tw-p-4" id="tabel">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-3 tw-py-3">No</th>
                              <th scope="col" class="tw-py-3 tw-text-center">Sektor</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Deskripsi Peluang Karir</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $counter = 1; @endphp
                            @foreach ($karir as $item )
                            <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter++}}</td>
                                @if ($item->sektor)
                                <td class="tw-px-6 tw-py-6 tw-text-center tw-w-36">{!! $item->sektor !!}</td>
                                @endif
                                @if ($item->deskripsi)
                                <td class="tw-px-6 tw-py-6">{!! $item->deskripsi !!}</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
{{-- end card --}}
@endsection