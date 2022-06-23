@extends('layouts.app')

@section('content')
 <section class="main">
        <div class="container">
    <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="LandingPage.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail page</li>
        </div>

        <section class="content">
            <div class="container">
                <div class="title mt-5">
                    <h1>

                       {{ $edukasiBlog->title }}
                    </h1>
                </div>

                <div class="picture mt-3">
                    <img src="{{ $edukasiBlog->picture }}" alt="Picture">
                </div>

                <div class="description mt-4 mb-5">
                    {{ $edukasiBlog->description }}
                </div>
            </div>

        </section>
    </section>
@endsection
