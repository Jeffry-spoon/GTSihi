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
                <div class="title">
                    <h1>
                       {{ $edukasiBlog->title }}
                    </h1>
                </div>

                <div class="picture " style="width: 100%; object-fit:cover;">
                    <img src="{{ asset($edukasiBlog->picture) }}" alt="Picture" style="width: 100%; object-fit:cover; border-radius: 20px;">
                </div>

                <div class="description mt-4 mb-5 col-12">
                    {!! $edukasiBlog->description !!}
                </div>
            </div>

        </section>
    </section>
@endsection
