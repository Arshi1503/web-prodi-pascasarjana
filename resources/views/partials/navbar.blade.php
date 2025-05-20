<header>
    <!-- start navigation -->
    <!-- TOP BAR -->
<div class="tw-w-full tw-bg-primary tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">
  
  <!-- Kiri: Logo atau Judul -->

  <!-- Tengah: Menu Navigasi -->
  <div class="tw-hidden lg:tw-flex tw-gap-6">
    <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
      <i class="bi bi-mortarboard"></i> Dashboard
    </a>
    <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
      <i class="bi bi-journal-bookmark"></i> LMS IWU
    </a>
    <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
      <i class="bi bi-book"></i> PMB IWU
    </a>
  </div>

  <!-- Kanan: Pilihan Bahasa -->
  <div class="tw-hidden lg:tw-flex tw-gap-2">
    <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
      <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
    <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
      <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
    <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
      <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
  </div>

</div>

    <nav class="navbar navbar-expand-lg bg-transparent disable-fixed tw-pb-4 tw-shadow-sm mt-3"> 
        <div class="container-fluid tw-flex tw-items-center tw-justify-between"> 
          <div class="col-auto">
            <a class="navbar-brand" href="https://www.iwu.ac.id/">
                <img src="{{ asset('images/gambar/logoiwu.png') }}" srcset="{{ asset('images/gambar/logoiwu.png') }}" alt="Logo IWU" class="img-fluid" style="height: 100px;">
            </a>
          </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="col-lg-8 tw-w-full">
                  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                      <ul class="navbar-nav alt-font tw-gap-6">
                          <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                          <li class="nav-item dropdown simple-dropdown">
                              <a href="/tentang" class="nav-link">Tentang Kami</a>
                              <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <li><a href="/tentang">Tentang Administrasi Bisnis</a></li>
                                  <li><a href="/visi-misi-tujuan">Visi, Misi, dan Tujuan</a></li>
                                  <li><a href="/struktur-organisasi">Struktur Organisasi</a></li>
                                  <li><a href="/fasilitas">Fasilitas</a></li>
                                  <li><a href="/dosen">Dosen</a></li>
                                  <li><a href="/akreditasi">Akreditas</a></li>
                                  <li><a href="/karir">Karir</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown simple-dropdown">
                              <a href="/kurikulum" class="nav-link">Akademik</a>
                              <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <li><a href="/kurikulum">Kurikulum</a></li>
                                  <li><a href="/profil-lulusan">Profil Lulusan</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown simple-dropdown">
                              <a href="/artikel" class="nav-link">Publikasi</a>
                              <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <li><a href="/artikel">Artikel</a></li>
                                  <li><a href="/berita">Berita</a></li>
                                  <li><a href="/kegiatan">Kegiatan</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown simple-dropdown">
                              <a href="https://pmb.iwu.ac.id/" class="nav-link">Daftar Sekarang!</a>
                              <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a href="https://pmb.iwu.ac.id/">Pendaftaran</a></li>
                                  <li><a href="/jadwal-penerimaan">Jadwal Penerimaan</a></li>
                                  <li><a href="/persyaratan-masuk">Persyaratan Masuk</a></li>
                              </ul>   
                          </li>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>