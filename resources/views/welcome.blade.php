@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
    <section class="banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-11 col-12">
            <div class="row">
              <div class="col-lg-6 col-12 copywriting">
                <h1 class="header">
                  Bijaklah Memilah <br />
                  Sampah
                </h1>
                <p class="support">
                  Mari kita mengelola sampah dengan bijak, <br />
                  untuk menciptakan lingkungan yang sehat dan bersih.
                </p>
                <p class="cta pt-3">
                  <a href="#" class="btn btn-pertama ">Jelajahi</a>
                </p>
              </div>
              <div class="col-lg-6 col-lg-6 text-center">
                <a href="#">
                  <img src="{{ asset('img/img-banner.png') }}" class="img-fluid" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row brands">
          <div class="col-lg-12 col-12 text-center">
            <img src="{{  asset('img/banner.png') }}" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Content Card Section -->
    <section class="content-card">
      <div class="container">
        <div class="row text-center pb-5">
          <div class="col-lg-12 col-12 header-wrap">
            <h2 class="primary-header">every year</h2>
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-xl-3 col-lg-4 col-md-6 col-12 my-4">
            <div class="item-every-year ">
              <div class="card px-4">
                <span class="text-center card-title">
                  <h2>64</h2>
                </span>
                <div class="card-body align-items-center">
                   <h3 class="card-text">Million tons</h3>
                   <h6 class="card-subhead">Plastic waste</h6>

                   <p>Plastic waste is produced in Indonesia every year</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12 my-4">
            <div class="item-every-year ">
              <div class="card px-4 d-flex " style="width: 18rem;">
                <span class="text-center card-title">
                  <h2 style="color: #054036 ;">1,29</h2>
                </span>
                <div class="card-body align-items-center">
                   <h3 class="card-text">Million tons</h3>
                   <h6 class="card-subhead">Plastic waste</h6>

                   <p>Among them care polluting the Indonesian acoeans</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-12 my-4">
            <div class="item-every-year ">
              <div class="card px-4 d-flex " style="width: 18rem;">
                <span class="text-center card-title">
                  <h2 style="color: #FFB703 ;">2nd</h2>
                </span>
                <div class="card-body align-items-center">
                   <h3 class="card-text">Biggest</h3>
                   <h6 class="card-subhead">Marine pollution</h6>

                   <p>Plastic waste is produced in Indonesia every year</p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Section -->
    <section class="content">
      <div class="container">
        <div class="row item-step pb-70 d-flex align-items-center">
          <div class="col-lg-6 col-12 text-left copywriting pl-150">
            <h2 class="primary-header">Reuse, Reduce, Recycle</h2>
            <p class="support">
              3R atau Reuse, Reduce, dan Recycle sampai sekarang masih menjadi cara terbaik dalam mengelola dan menangani sampah dengan berbagai permasalahannya. Penerapan sistem 3R atau reuse, reduce, dan recycle menjadi salah satu solusi
              pengelolaan sampah di samping mengolah sampah menjadi kompos atau memanfaatkan sampah sumber listrik (PLTSa; Pembangkit Listrik Tenaga Sampah).
            </p>
          </div>
          <div class="col-lg-6 col-12 text-center">
            <img src="{{ asset('img/item-1.png') }}" class="cover" alt="" />
          </div>
        </div>
        <div class="row item-step d-flex align-items-center item-2">
          <div class="col-lg-6 col-12 text-center">
            <img src="{{ asset('img/item-2.png') }}" class="cover" alt="" style="width: 230px ;"/>
          </div>
          <div class="col-lg-6 col-12 text-left copywriting">
            <h2 class="primary-header">Say NO to plastic !</h2>
            <p class="support">
              No to plastic! Mengapa? Hanya karena ini adalah salah satu bahan daur ulang yang paling sulit, pada dasarnya kita menggunakannya di mana-mana. Jika manusia mencemari lingkungan dengan plastik, mereka menghasilkan kerusakan
              besar, terutama untuk laut dan semuder. Pikirkanlah, setiap tahun kita membuang 8 juta sampah plastik ke dalam air (seperti yang dikatakan para pemimpin UNEP). Kita tidak hanya bertanggung jawab atas perusakan habitat bawah
              laut, tetapi juga membahayakan kelangsungan hidup seluruh spesies.
            </p>
          </div>
        </div>
        <div class="row item-step pb-70 d-flex align-items-center">
          <div class="col-lg-6 col-12 text-left copywriting pl-150">
            <h2 class="primary-header">Go Green</h2>
            <p class="support">
              Ngomong-ngomong soal Go Green, kalian tahu ngga apa yang dimaksud dengan Go Green itu sendiri? Go Green berarti mengubah gaya hidup menjadi lebih eco-friendly atau ramah lingkungan. Menjadi lebih sadar akan lingkungan sekitar
              dengan mengubah gaya hidup kita dapat mengurangi tingkat polusi dan sampah yang kita buang.
            </p>
          </div>
          <div class="col-lg-6 col-12 text-center">
            <img src="{{ asset('img/item-3.png') }}" class="cover" alt="" />
          </div>
        </div>
      </div>



    </section>

    <section class="card-slider mt-5 ">
      <div class="container">
        <div class="row text-center pb-5 ">
          <div class="col-lg-12 col-12 header-wrap ">
            <h2 class="primary-header">jenis sampah</h2>
          </div>
        </div>
      </div>
         <!-- Swiper -->
    <div class="container swiper mySwiper">
      <div class=" container swiper-wrapper ">

        <div class="col-lg-4 col-md-6 col-12 swiper-slide" >
             <div class="card " >
              <img src="{{ asset('img/card-1.png') }}" class="card-img-top" alt="edukasi">
                <div class="card-body">
                 <h5 class="card-title mt-2"> Berdasarkan sumbernya </h5>
                  <p class="card-text" >
                    Sampah manusia berupa sisa pengolahan dari makanan dan perlengkapan rumah tangga yang biasa dibuang oleh seseorang atau banyak, sampah ini banyak menumpuk karena kebutuhan sehari-hari manusia.
                    </p>
                  <a href="{{ route('detail.create', 'sumbernya') }}" class="btn btn-outline-success d-flex justify-content-center">Selengkapnya</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 swiper-slide" >
             <div class="card " >
              <img src="{{ asset('img/card-2.png') }}" class="card-img-top" alt="edukasi">
                <div class="card-body">
                 <h5 class="card-title mt-2"> Berdasarkan Sifatnya</h5>
                  <p class="card-text" >
                    Sampah organik merupakan sampah yang dapat diurai dimana hal ini sampah yang mudah membusuk seperti daging, sayuran, daun-daun kering, dan sebagainya. Sampah ini mudah diolah menjadi kompos untuk tumbuhan.
                    </p>
                  <a href="{{ route('detail.create', 'sifatnya') }}" class="btn btn-outline-success d-flex justify-content-center">Selengkapnya</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 swiper-slide" >
             <div class="card " >
              <img src="{{ asset('img/card-3.png') }}" class="card-img-top" alt="edukasi">
                <div class="card-body">
                 <h5 class="card-title mt-2"> Berdasarkan Bentuknya</h5>
                  <p class="card-text" >
                    Sampah padat merupakan segala bahan buangan selain sampah cair dan polusi udara, sampah padat dapat berupa sampah lingkungan, sampah ini dapat dibagi menjadi 2 yaitu
                    </p>
                  <a href="{{ route('detail.create', 'bentuknya') }}" class="btn btn-outline-success d-flex justify-content-center">Selengkapnya</a>
                </div>
              </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </section>

  <!-- Section Newsletter -->
      <section class="newsletter section contain ">
        <div class="newsletter_bg grid container">
          <div>
            <h2 class="newsletter_title">
              Subscribe Our
              Newsletter
            </h2>
            <p class="newsletter_description">Don't miss out on your discount. Subscribe to our email newsletter to get the best offers, discount, coupons, gifts and much more.</p>
          </div>

          <form action="" class="newsletter_subscribe">
            <input type="email" placeholder="Input your email" class="newsletter_input" />
            <button class="button btn-subscribe">Subscribe</button>
          </form>
        </div>
      </section>

@endsection


