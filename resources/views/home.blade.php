@extends('index')
@section('title', 'Tasting Cars- Homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
@endsection


@section('content')
 <!-- Slideshow container -->
 <div class="slideshow-container">

    <!-- images with caption text -->
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

    <!-- The dots/circles -->
    <div id="dots"style="text-align: center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div> 

</div>


<div id="carousel-text">
    <h1>Our Latest Automobile Models</h1>
    <p id="head-description">Information relative to the Cars</p>
</div>

<div class="col-md-12 col-sm-12" id="test">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="10000" id="myCarousel">
    <div class="carousel-inner">
    <div class="item active">
            <div class="col-md-3 col-sm-4">
            <div class="block">
                <img class="car-img"src="{{ asset('img/catalog/slideshow/car1.png') }}" class="img-responsive">
                <div class="flex-container">
                    <p>Mazda <br> CX-5 XD(4WD)</p>
                    <div name="block1" class="pin-button">
                        <p class="unchecked">Save this car <br>for later</p> 
                        <img class="unchecked" src="{{ asset('img/icon/pinUncheck.png') }}" class="img-responsive">

                        <p class="checked">Remove from <br>pined cars</p> 
                        <img class="checked"src="{{ asset('img/icon/pinCheck.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-detail"> 
                    <span>See Details</span>
                    <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4">
            <div class="block">
                <img class="car-img"src="{{ asset('img/catalog/slideshow/car2.png') }}" class="img-responsive">
                <div class="flex-container">
                    <p>Toyota <br> Alphard Hybrid</p>
                    <div name="block2" class="pin-button">
                        <p class="unchecked">Save this car <br>for later</p> 
                        <img class="unchecked" src="{{ asset('img/icon/pinUncheck.png') }}" class="img-responsive">

                        <p class="checked">Remove from <br>pined cars</p> 
                        <img class="checked"src="{{ asset('img/icon/pinCheck.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-detail"> 
                    <span>See Details</span>
                    <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4">
            <div class="block">
                <img class="car-img"src="{{ asset('img/catalog/slideshow/car3.png') }}" class="img-responsive">
                <div class="flex-container">
                    <p>Toyota <br> Ariya Premium</p>
                    <div name="block3" class="pin-button">
                        <p class="unchecked">Save this car <br>for later</p> 
                        <img class="unchecked" src="{{ asset('img/icon/pinUncheck.png') }}" class="img-responsive">

                        <p class="checked">Remove from <br>pined cars</p> 
                        <img class="checked"src="{{ asset('img/icon/pinCheck.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-detail"> 
                    <span>See Details</span>
                    <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4">  
            <div class="block">
                <img class="car-img"src="{{ asset('img/catalog/slideshow/car4.png') }}" class="img-responsive">
                <div class="flex-container">
                    <p>Maker <br> Car model</p>
                    <div name="block4" class="pin-button">
                        <p class="unchecked">Save this car <br>for later</p> 
                        <img class="unchecked" src="{{ asset('img/icon/pinUncheck.png') }}" class="img-responsive">

                        <p class="checked">Remove from <br>pined cars</p> 
                        <img class="checked"src="{{ asset('img/icon/pinCheck.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-detail"> 
                    <span>See Details</span>
                    <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4">  
            <div class="block">
                <img class="car-img"src="{{ asset('img/catalog/slideshow/car5.png') }}" class="img-responsive">
                <div class="flex-container">
                    <p>Maker <br> Car model</p>
                    <div name="block5" class="pin-button">
                        <p class="unchecked">Save this car <br>for later</p> 
                        <img class="unchecked" src="{{ asset('img/icon/pinUncheck.png') }}" class="img-responsive">

                        <p class="checked">Remove from <br>pined cars</p> 
                        <img class="checked"src="{{ asset('img/icon/pinCheck.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-detail"> 
                    <span>See Details</span>
                    <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                </div>
            </div>
            </div>
        </div>

    </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="{{ asset('img/icon/arrowLeftSlide.png') }}"></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="{{ asset('img/icon/arrowRightSlide.png') }}"></a>
    </div>
</div>

<div id="search-box" class="container-fluid"> 
    <div class="row">
        <div id="typesearch" class="col-md-5 col-md-offset-1">
            <h3>Search by car type</h3>
            <div class="car-row">
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car1.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car2.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car3.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="car-row">
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car4.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car5.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car6.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="car-row">
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car7.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car8.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="car-type">
                    <img src="{{ asset('img/catalog/content/car9.png') }}" class="img-responsive">
                    <div>
                        <span>Car type</span>
                        <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                        <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            
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
