@extends('layouts.app')

@section('content')
    <section class="main" >
      <div class="container" >
         <div class="title" style="margin-top: 120px;">
          <h1>Jenis Sampah</h1>
        </div>

        <!-- Content Section -->
        <div class="col-md-12 mb-4" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sumber-manusia.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Manusia</h2>
              <p class="card-text">
              berupa sisa pengolahan dari makanan dan perlengkapan rumah tangga yang biasa dibuang oleh seseorang atau banyak, sampah ini banyak menumpuk karena kebutuhan sehari-hari manusia.
              </p>
              <!-- <a class="btn btn-outline-success" href="{{ route('detail.create', 'sumbernya') }}" role="button onclick="myFunction()" >selengkapnya</a> -->
            </div>
          </div>
          <hr />
        </div>
         <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sumber-alam.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Alam</h2>
              <p>
              Merupakan sampah hasil dari alam yang dapat membusuk dan berguna bagi lingkungan sekitar, Sampah nuklir merupakan sampah yang berbahaya dan tidak dapat didaur ulang, sampah ini dibuang dengan hati-hati dan tidak boleh sembarangan, banyak yang harus disiapkan sebelum membuang sampah nuklir dan perlu extra berhati-hati.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sumber-pertambangan.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Pertambangan</h2>
              <p>
              Biasanya berasal dari hasil galian dan batu-batu yang dipecahkan, sampah ini biasanya dibiarkan begitu saja karena dapat menyatu dengan alam dan tidak membawa dampak apapun, namun tanpa diketahui sampah ini dapat didaur ulang.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sumber-pabrik.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Industri</h2>
              <p>
              Sering disebut limbah pabrik, biasanya sampah ini dibuang dengan tidak hati-hati dan dapat membawa dampak buruk ke lingkungan dan manusia yang disekitarnya karena dapat membuat lingkungan tercemar dan merusak ekosistem di sekitarnya. 
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sumber-konsumsi.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Konsumsi</h2>
              <p>
              Hampir sama dengan sampah manusia namun sampah ini ada beberapa yang berasal dari fast food dan pabrik makanan.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sifat-organik.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Organik</h2>
              <p>
              Merupakan sampah yang dapat diurai dimana hal ini sampah yang mudah membusuk seperti daging, sayuran, daun-daun kering, dan sebagainya. Sampah ini mudah diolah menjadi kompos untuk tumbuhan.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sifat-unorganik.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Anorganik</h2>
              <p>
              Merupakan sampah yang tidak dapat diurai, dalam hal ini tidak mudah membusuk bahkan tidak bisa membusuk seperti plastik, kaleng, gelas kaca. Beberapa sampah anorganik dapat didaur ulang atau dijual seperti plastik, kaca, kertas, dan karton.
              Sampah beracun merupakan limbah dari bahan-bahan yang berbahaya 
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sampah-padat.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Padat</h2>
              <p>
              Merupakan segala bahan buangan selain sampah cair dan polusi udara, sampah padat dapat berupa sampah lingkungan yang dapat merusak lingkungan.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sampah-cair.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Cair</h2>
              <p>
              Adalah bahan cairan yang digunakan dan tidak diperlukan, dibuang ke tempat sampah.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sampah-radioaktif.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Radioaktif</h2>
              <p>
              Sampah ini merupakan sampah nuklir hasil dari fusi dan fisi nuklir yang menghasilkan uranium dan thorium yang sangat berbahaya bagi lingkungan hidup dan juga manusia. Oleh karena itu sampah nuklir ini tersimpan di tempat yang tidak melakukan aktivitas tempat uang dituju, biasanya bekas tambang garam atau dasar laut.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sampah-manusia.jpg') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Manusia</h2>
              <p>
              Sampah ini biasa digunakan terhadap hasil-hasil pencernaan manusia seperti feces dan urin. Sampah ini menjadi bahaya serius bagi kesehatan karena wabah penyakit dapat disebabkan oleh virus dan bakteri. Salah satu perkembangan utama pada manusia adalah pengurangan penularan penyakit melalui sampah-sampah manusia dengan cara hidup yang higenis dan sanitasi.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
          <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="{{ asset('img/sampah-udara.png') }}" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sampah Udara</h2>
              <p>
              Sampah ini sering disebut polusi udara dimana kerusakan lapisan ozon di udara karena karbon monoksida, karbon dioksida, CFC(Cloro Fluoro Carbon) yang dapat merusak atmosfer bumi ini.
              </p>
              <!-- <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a> -->
            </div>
          </div>
          <hr />
        </div>
      </div>
    </section>
@endsection
