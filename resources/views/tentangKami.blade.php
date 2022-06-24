@extends('layouts.app')

@section('content')
  <section class="dark">
      <div class="container py-4" id="vaksinbaru">
        <h3 class="h1 text-center" id="pageHeaderTitle" style="padding-top: 50px">Tim Kami</h3>

        <article class="postcard dark blue">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="{{ asset('img/Eunike.png') }}" alt="Image Title" />
          </a>
          <div class="postcard__text">
            <h1 class="postcard__title blue"><a href="#">Eunike Holy Imanuella</a></h1>
            <div class="postcard__subtitle small"><i class="bx bx-female"></i> Mahasiswi Sistem Informasi 2020</div>
            <div class="postcard__bar"></div>
            <ul class="postcard__tagbox">
              <a href="mailto:eunikehi22@gmail.com" class="me-4">
                <i class="bx bxl-google"></i>
              </a>
              <a href="https://twitter.com/eunikehi" class=" me-4">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="https://www.facebook.com/eunikehi" class=" me-4">
                <i class="bx bxl-facebook-circle"></i>
              </a>
              <a href="https://www.instagram.com/eunikehi/" target="_blank" class=" me-4">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/eunikehi/" class=" me-4">
                <i class="bx bxl-linkedin-square"></i>
              </a>
              <a href="https://github.com/eunikehi" class=" me-4">
                <i class="bx bxl-github"></i>
              </a>
            </ul>
          </div>
        </article>
        <article class="postcard dark red">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="{{ asset('img/Jeffry.png') }}" alt="Image Title" />
          </a>
          <div class="postcard__text">
            <h1 class="postcard__title red"><a href="#">Jeffry</a></h1>
            <div class="postcard__subtitle small"><i class="bx bx-male"></i> Mahasiswa Sistem Informasi 2020</div>
            <div class="postcard__bar"></div>
            <ul class="postcard__tagbox">
              <a href="mailto:jeffryacai@gmail.com" class=" me-4">
                <i class="bx bxl-google"></i>
              </a>
               <a href="#" class=" me-4">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="#" class=" me-4">
                <i class="bx bxl-facebook-circle"></i>
              </a>
              <a href="https://www.instagram.com/" class=" me-4">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/jeffrytjn/" class=" me-4">
                <i class="bx bxl-linkedin-square"></i>
              </a>
              <a href="https://github.com/" class=" me-4">
                <i class="bx bxl-github"></i>
              </a>
            </ul>
          </div>
        </article>
        <article class="postcard dark green">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="{{ asset('img/Nathan.png') }}" alt="Image Title" />
          </a>
          <div class="postcard__text">
            <h1 class="postcard__title green"><a href="v_moderna.html">Nathan Septian</a></h1>
            <div class="postcard__subtitle small"><i class="bx bx-male"></i> Mahasiswa Teknik Informatika 2020</div>
            <div class="postcard__bar"></div>
            <ul class="postcard__tagbox">
              <a href="mailto:nathanseptiantimotius123@gmail.com" class=" me-4">
                <i class="bx bxl-google"></i>
              </a>
              <a href="https://twitter.com/Nathanseptian1" class=" me-4">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="https://www.facebook.com/nathan.septian.5" class=" me-4">
                <i class="bx bxl-facebook-circle"></i>
              </a>
              <a href="https://www.instagram.com/nathansept/" class=" me-4">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/nathan-septian-7276b2201/" class=" me-4">
                <i class="bx bxl-linkedin-square"></i>
              </a>
              <a href="https://github.com/Nathansept" class=" me-4">
                <i class="bx bxl-github"></i>
              </a>
            </ul>
          </div>
        </article>
      </div>
    </section>

    <section class="light">
      <div class="container py-5" id="consumed">
        <div class="h1 text-center text-dark" id="pageHeaderTitle" >Tentang Kami</div>
        <p class="text-dark">
          SiHi merupakan situs website yang dibangun pada Mei 2022 oleh kami bertiga, yaitu Eunike, Jeffry dan Nathan. Project ini, diadakan oleh organisasi FAITH dari Universitas Petra. Website ini bertujuan untuk memberi informasi
          mengenai berbagai edukasi seputar sampah. Sampah biasanya identik dengan warna hijau. Nama SiHi sendiri memiliki kepanjangannya yaitu SiHijau, memiliki makna juga bahwa sampah juga berguna untuk kita apabila dapat diolah ataupun
          dikelola dengan benar. Harapan dengan dibangunnya website SiHi ini, orang-orang yang mengunjungi website SiHi dapat memiliki kesadaran hingga inisiatif akan pentingnya mengelola sampah dengan baik dan benar. Sehingga,
          sampah-sampah yang ada di bumi ini tidak menimbulkan pencemaran lingkungan.
        </p>
      </div>
    </section>
@endsection
