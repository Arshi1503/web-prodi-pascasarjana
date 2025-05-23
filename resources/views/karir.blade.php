@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
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
        <section class="tw-section-dark">
            <div class="tw-card">
                <div>
                    <h3 class="tw-card-title">Karir</h3>
                    <p class="tw-card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam reprehenderit explicabo quas, atque esse architecto eaque quis exercitationem dolore pariatur eveniet? Libero alias voluptates repellat cum neque possimus, repellendus vitae.
                    Optio magni accusantium eveniet eos nulla mollitia impedit culpa possimus sunt. Repellat eos nam delectus facilis, ab, incidunt reiciendis, quibusdam quod temporibus doloribus odit commodi! Rem dolor quisquam accusamus laboriosam.
                    Aperiam iure ullam cupiditate laboriosam nihil ut tempora quaerat explicabo quibusdam corporis natus minus illum itaque tenetur quas recusandae, nisi consequatur temporibus quos. Asperiores harum enim ratione totam molestiae inventore!</p>
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
                            <tr class="tw-table-row">
                                <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                                <td class="tw-px-3 tw-py-4 tw-text-justify">	
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis expedita voluptatum repudiandae consequuntur! Veritatis soluta placeat sint impedit necessitatibus, dicta labore architecto sed reiciendis. Nam ipsa commodi neque porro repellendus.</td>
                                <td class="tw-px-6 tw-py-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, vitae quo. Iste eum officia consequuntur, hic suscipit quaerat at ratione laborum eos obcaecati autem impedit, adipisci maiores, labore sapiente reiciendis.</td>
                            </tr>
                            <tr class="tw-table-row last:tw-border-0">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">2</td>
                              <td class="tw-px-6 tw-py-4">Menyelenggarakan pendidikan berkualitas di bidang informatika yang berorientasi pada perkembangan teknologi terkini dan kebutuhan industri.</td>
                              <td class="tw-px-6 tw-py-4">Menyelenggarakan pendidikan berkualitas di bidang informatika yang berorientasi pada perkembangan teknologi terkini dan kebutuhan industri.</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
{{-- end card --}}
@endsection