@extends('index')
@section('title', 'Tasting Cars- Homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
@endsection


@section('content')
 <!-- Slideshow container -->
 <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="{{ asset('img/catalog/slideshow/top/car1.jpg') }}" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="{{ asset('img/catalog/slideshow/top/car2.jpg') }}" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="{{ asset('img/catalog/slideshow/top/car3.jpg') }}" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="{{ asset('img/catalog/slideshow/top/car4.jpg') }}" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="{{ asset('img/catalog/slideshow/top/car.jpg') }}" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div> 


@endsection

@section('js-scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
