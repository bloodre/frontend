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


<div class="col-md-12" id="carousel-div">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="10000" id="myCarousel">
    <div class="carousel-inner">
    <div class="item active">
            <div class="col-md-3 col-sm-4 col-xs-12">
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
                <div class="car-detail-outer">
                    <div class="car-detail"> 
                        <span>See Details</span>
                        <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12">
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
                <div class="car-detail-outer">
                    <div class="car-detail"> 
                        <span>See Details</span>
                        <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-sxs-12">
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
                <div class="car-detail-outer">
                    <div class="car-detail"> 
                        <span>See Details</span>
                        <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-sxs-12">  
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
                <div class="car-detail-outer">
                    <div class="car-detail"> 
                        <span>See Details</span>
                        <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-sxs-12">  
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
                <div class="car-detail-outer">
                    <div class="car-detail"> 
                        <span>See Details</span>
                        <img src="{{ asset('img/icon/arrowRightSlideButton.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="{{ asset('img/icon/arrowLeftSlide.png') }}"></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="{{ asset('img/icon/arrowRightSlide.png') }}"></a>
    </div>
</div>


<!-- Search boxes -->


<div class="container-fluid"> 
    <div class="row">
        <div id="typesearch" class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
            <h3>Search by type</h3>
            <!-- Car table -->
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
            <!-- End of car table -->
            <div class="option-head">
                <img src="{{ asset('img/icon/delimiter.png') }}" class="img-responsive">
                <span>Search options</span>
            </div>
            <!-- row with select input -->  
            <div class="type-select">
                <span style="padding-right:0.5em;"> Maker</span>
                <select class="select">
                    <option selected>All makers</option>
                    <option value="1">maker1</option>
                    <option value="2">maker2</option>
                </select>
                <span id="engine-select">Engine</span>
                <select class="select">
                    <option selected>No preference</option>
                    <option value="1">power1</option>
                    <option value="2">power2</option>
                </select>
            </div>
            <!-- toggle switch row -->
            <div class="type-select">
                <span>AT/MT</span>
                <div class="switch-button">
                    <input class="switch-button-checkbox" type="checkbox"></input>
                    <label name="AT" class="switch-button-label" for=""><span class="switch-button-label-span">AT</span></label>
                </div>
            </div>
            <!-- search submit row -->
            <div id="maker-submit-outer">
                <div class="submit"><span>Launch your Search</span><img src="{{ asset('img/icon/arrowButton.png') }}" class="img-responsive"></div>
            </div>
    
        </div>

        <div class="col-md-5  col-sm-12 col-xs-12">
            <div id="makersearch">
                <h3>Search by maker</h3>
                <!-- row with select input -->  
                <div style="text-align:center" class="type-select">
                    <span id="maker-select"> Maker</span>
                    <select class="select">
                        <option selected>All makers</option>
                        <option value="1">maker1</option>
                        <option value="2">maker2</option>
                    </select>
                    <span id="engine-select">Car type</span>
                    <select class="select">
                        <option selected>No preference</option>
                        <option value="1">type1</option>
                        <option value="2">type2</option>
                    </select>
                </div>
                <!-- Car row -->
                <div class="car-row">
                    <div style="padding-left:1em;"class="car-type">
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
                    <div style="padding-right:1em;"class="car-type">
                        <img src="{{ asset('img/catalog/content/car3.png') }}" class="img-responsive">
                        <div>
                            <span>Car type</span>
                            <img class="selected" src="{{ asset('img/icon/checkbox1.png') }}" class="img-responsive">
                            <img class="not-selected" src="{{ asset('img/icon/checkbox2.png') }}" class="img-responsive">
                        </div>
                    </div>
                </div>

                <!-- End of car row -->
                <div class="option-head">
                    <img src="{{ asset('img/icon/delimiter.png') }}" class="img-responsive">
                    <span>Search options</span>
                </div>
                <!-- Engine select row -->
                <span id="maker-engine-text">Engine</span>
                <select id="maker-engine-select" class="select">
                    <option selected>No preference</option>
                    <option value="1">power1</option>
                    <option value="2">power2</option>
                </select>
                <!-- toggle switch row -->
                <div style="padding-top:2vh;">
                    <span id="maker-transmission">AT/MT</span>
                    <div class="switch-button">
                        <input class="switch-button-checkbox" type="checkbox"></input>
                        <label name="AT" class="switch-button-label" for=""><span class="switch-button-label-span">AT</span></label>
                    </div>
                </div>
                <!-- search submit row -->
                <div id="maker-submit-outer">
                    <div class="submit">Launch your Search<img src="{{ asset('img/icon/arrowButton.png') }}" class="img-responsive"></div>
                </div>
                
            </div>

            <div id="wordsearch">
                <h3>Search by Keyword</h3>
                <div id="search-bar-container"> <input id="search-bar"type="text"></div>
                                <!-- search submit row -->
                <div id="keyword-submit-outer">
                    <div class="submit">Search<img src="{{ asset('img/icon/arrowButton.png') }}" class="img-responsive"></div>
                </div>
            </div>
        </div>

    </div>

    <div style="margin-top: 10vh"class="container-fluid"> 
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <span id="news-head">Latest News</span>
                    <div id="news-button-outer">
                    <div id="news-button">See More</div>
                    </div>
                </div>
                <div id="thick-line"></div>
                <div class="news-block">
                    <div class="vertical-bar"></div>
                    <div class="news-text">
                        <p>2017/01/26 <br> Website news </p>
                    </div>
                    <img style="float:right;" src="{{ asset('img/icon/arrowRight.png') }}" class="img-responsive">
                </div>
                <div class="thin-bar"></div>
                <div class="news-block">
                    <div class="vertical-bar"></div>
                    <div class="news-text">
                        <p>2017/01/26 <br> Website news </p>
                    </div>
                    <img style="float:right;" src="{{ asset('img/icon/arrowRight.png') }}" class="img-responsive">
                </div>
                <div class="thin-bar"></div>
                <div class="news-block">
                    <div class="vertical-bar"></div>
                    <div class="news-text">
                        <p>2017/01/26 <br> Website news </p>
                    </div>
                    <img style="float:right;" src="{{ asset('img/icon/arrowRight.png') }}" class="img-responsive">
                </div>
                <div class="thin-bar"></div>

        </div>
    </div>


</div>
</div>

<div class="container-fluid">
    <img id="scrolltop" style="float:right;cursor:pointer;" src="{{ asset('img/icon/backToTop.png') }}" class="img-responsive">
</div>

<div id="company-info">
    <div id="info-left">
        <img id="bottom-logo" src="{{ asset('img/logo/tc-black-logo.svg') }}" class="img-responsive">
        <p>Postcode</p>
        <p>XXX Street XXX City XXX Prefecture XXX Country </p>
        <p>Local</p>
    </div>
    <div id="middle-break"></div>
    <table id="info-right">
        <tr class="info-links">
            <td><a href="#">Free test drive</a></td>
            <td><a href="#">About us</a></td>
        </tr>
        <tr class="info-links">
            <td><a href="#">Pined items</a></td>
            <td><a href="#">Privacy policy</a></td>
        </tr>
        <tr class="info-links">
            <td><a href="#">News</a></td>
            <td><a href="#">Terms of use</a></td>
        </tr>
    </table>
</div>

<footer id="copyright" class="container-fluid">Copyright<footer>

@endsection

@section('js-scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
