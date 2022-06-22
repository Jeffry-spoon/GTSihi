@extends('layouts.app')

@section('content')
    <section class="main">
      <div class="container">
        <div class="title">
          <h1>Jenis Sampah</h1>
        </div>

        <!-- Content Section -->
        <div class="col-md-12 mb-4" style="padding: 5px">
          <div class="row">
            <img src="assets/img/Eunike.png" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sumber</h2>
              <p>
                Berdasarkan sumbernya, sampah dibedakan menjadi beberapa bagian, diantaranya sampah alam, sampah manusia, sampah konsumsi, sampah nuklir, sampah industri, dan sampah pertambangan. Simak penjelasannya sampah berdasarkan
                sumbernya.
              </p>
              <a class="btn btn-outline-success" href="detailPage.html" role="button" >selengkapnya</a>
            </div>
          </div>
          <hr />
        </div>
         <div class="col-md-12" style="padding: 5px">
          <div class="row">
            <img src="assets/img/Eunike.png" class="picture"/>
            <div class="col-lg-9 col-sm-12">
              <h2 class="title-item">Sumber</h2>
              <p>
                Berdasarkan sumbernya, sampah dibedakan menjadi beberapa bagian, diantaranya sampah alam, sampah manusia, sampah konsumsi, sampah nuklir, sampah industri, dan sampah pertambangan. Simak penjelasannya sampah berdasarkan
                sumbernya.
              </p>
              <a class="btn btn-outline-success" href="" role="button" onclick="myFunction()">selengkapnya</a>
            </div>
          </div>
          <hr />
        </div>
      </div>
    </section>
@endsection
