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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Visi, Misi, Tujuan</h1>
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
        <section class="tw-border tw-border-x tw-border-[#2E2E2E] tw-bg-[#2E2E2E]">
            <div class="tw-card">
                <h3 class="tw-card-title">Visi, Misi, Tujuan</h3>
                <div class="tw-tab-nav">
                  <button class="tab-button tw-tab-nav-active" data-tab="visi">
                    Visi
                  </button>
                  <button class="tab-button tw-tab-nav-deactive" data-tab="misi">
                    Misi
                  </button>
                  <button class="tab-button tw-tab-nav-deactive" data-tab="tujuan">
                    Tujuan
                  </button>
                </div>
              
                <div class="tab-content tw-p-4" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="visi">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Visi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $counter = 1; @endphp
                            @foreach ($visiMisiTujuan as $item)
                            <tr class="tw-table-row">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{ $counter++ }}</td>
                              @if ($item->visi)    
                              <td class="tw-px-6 tw-py-4">{!! $item->visi !!}</td>
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>    
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="misi">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Misi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($visiMisiTujuan as $item)
                            @if (is_array($item->misi))
                              @foreach ($item->misi as $index => $m)
                                <tr class="tw-table-row">
                                  <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{$index + 1}}</td>   
                                  <td class="tw-px-6 tw-py-4">{!! $m['text']!!}</td>    
                                </tr> 
                              @endforeach
                            @else
                              <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>   
                                <td class="tw-px-6 tw-py-4">{!! $item->misi !!}</td>    
                              </tr>
                            @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="tujuan">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-table">
                          <thead class="tw-table-head">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Tujuan</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($visiMisiTujuan as $item)
                            @if (is_array($item->tujuan))
                              @foreach ($item->tujuan as $index => $m)
                                <tr class="tw-table-row">
                                  <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">{{$index + 1}}</td>   
                                  <td class="tw-px-6 tw-py-4">{!! $m['text']!!}</td>    
                                </tr> 
                              @endforeach
                            @else
                              <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>   
                                <td class="tw-px-6 tw-py-4">{!! $item->tujuan !!}</td>    
                              </tr>
                            @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
              </div>
              
        </section>
{{-- end card --}}
@endsection