@extends('layout')

@section('title', 'Home')

@section('content')
<h1 class="text-center fw-bold mt-5">Services We Offer & Provide</h1>
<div class="container-fluid pb-5" style="padding-bottom: 0px;" id="home">
    <div class="row">
        @foreach ($services as $service => $info)
        <div class="col-lg-6 mb-lg-0" style="padding: 10px;">
            <div class="hover hover-1 text-white rounded"><img src="resources/img/services/{{ $info[0] }}.jpg" class="rounded shadow" alt="image">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                    <h2 class="text-uppercase hover-1-title mb-0 fw-bold">{{ $service }}</h2>
                    <p class="hover-1-description fw-light mb-0">
                        <h5>{{ $info[1] }}</h5>
                        <a class="btn btn-warning btn-lg mt-2 float-end fw-bold" href="#{{$info[0]}}">
                            <i class="bi bi-box-arrow-up-right"></i>&nbsp;SHOW MENU
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div id="empresa" style="padding: 20px;margin: 1px;margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h1 class="text-center fw-bold">About Us</h1>
                <p class="fs-5 text-justify">It is our goal to ensure your utmost satisfaction through an attentive staff, professional environment, and outstanding sanitation. We believe in only providing you the best quality of nail care by staying up-to-date with the hightest
                    standards of <strong class="text-primary">WYNN Nail & Lash</strong> and provide you with excellent services while maintaining a clean, friendly, and relaxing atmosphere. For your health and safety, pedicure liners are changed out, disposed off and the tub will be thoroughly
                    cleaned after each use. All tools used for pedicure and manicure services will be disposed of once finished. Other tools will be properly cleaned with barbicide and placed in sterilizer. </p>
            </div>
            <div class="col-md-12 col-lg-6">
                <img src="resources/img/about-bg.jpg" class="h-100 rounded shadow" style="object-fit: cover; -o-object-fit: cover;">
            </div>
        </div>
    </div>
</div>

@include('services')

@include('gallery')

@include('contact')

@endsection
