@extends('index')
@section('title', 'Tasting Cars- Homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
@endsection


@section('content')
 <!-- Slideshow container -->
 <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
        <img src="{{ asset('img/catalog/slideshow/top/car1.jpg') }} " >
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides">
        <img src="{{ asset('img/catalog/slideshow/top/car2.jpg') }}">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides">
        <img src="{{ asset('img/catalog/slideshow/top/car3.jpg') }}">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides">
        <img src="{{ asset('img/catalog/slideshow/top/car7.jpg') }}">
        <div class="text">Caption Four</div>
    </div>

    <div class="mySlides">
        <img src="{{ asset('img/catalog/slideshow/top/car8.jpg') }}">
        <div class="text">Caption Five</div>
    </div>

</div>

<!-- The dots/circles -->
<div style="text-align: center;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div> 

<div style="background-color: white;">
    <h1>Our Latest Automobile Models</h1>
    <p id="head-description">Information relative to the Cars</p>

</div>

<div class="col-md-10 col-md-offset-1">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="6000" id="myCarousel">
    <div class="carousel-inner">
        <div class="item active">
        <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/150x125?text=a" class="img-responsive"></a></div>
        </div>
        <div class="item">
        <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/150x125?text=b" class="img-responsive"></a></div>
        </div>
        <div class="item">
        <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/150x125?text=c" class="img-responsive"></a></div>
        </div>
        <div class="item">
        <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/150x125?text=d" class="img-responsive"></a></div>
        </div>
        <div class="item">
        <div class="col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="http://placehold.it/150x125?text=e" class="img-responsive"></a></div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="{{ asset('img/icon/arrowLeftSlide.png') }}"></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="{{ asset('img/icon/arrowRightSlide.png') }}"></a>
    </div>
</div>

<div class="container-fluid" style="background-color:white;"> 
    <div class="row">
        <div id="typesearch" class="col-md-5" style="background-color:grey;">
        <p>Search by car type</p>
        </div>

        <div class="col-md-5">
            <div id="makersearch" style="background-color:white;">
            <p>Search by Maker</p>
            </div>
            <div id="wordsearch" style="background-color:white;">
            <p>Free-word search </p>
            </div>
        </div>
    </div>

</div>


@endsection

@section('js-scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
