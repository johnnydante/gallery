<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeria tortów</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/my.css">
</head>
<body class="animsition">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                {{--<div class="logo">
                    <a href="index.html">
                        <img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                    </a>
                </div>--}}

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu filter-tope-group">
                            <li>
                                <button data-filter="*" class="my-menu-button click" id="first-all">
                                    <span class="my-menu">
                                        Wszystkie
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".wedding" class="my-menu-button click">
                                    <span class="my-menu">
                                        Wesele
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".baptism" class="my-menu-button click">
                                    <span class="my-menu">
                                        Chrzest
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".birthday" class="my-menu-button click">
                                    <span class="my-menu">
                                        Urodziny
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".communion" class="my-menu-button click">
                                    <span class="my-menu">
                                        Komunia św.
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".anniversary" class="my-menu-button click">
                                    <span class="my-menu">
                                        Rocznica
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button data-filter=".other" class="my-menu-button click">
                                    <span class="my-menu">
                                        Inne
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>

                @auth
                    <a href="{{ route('addPhoto') }}" class="add-photo btn btn btn-warning">
                        <span>Dodaj zdjęcie</span>
                    </a>

                    <a  href="{{ route('logout') }}"  class="my-logout btn btn btn-danger"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>Wyloguj</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    {{--    <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>--}}
                    <div class="btn-show-sidebar">
                        <button class="btn-show-sidebar-up m-l-32 trans-0-4"></button>
                        <button class="btn-show-sidebar-down m-l-32 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70 filter-tope-group">
            <li>
                <button data-filter="*" class=" click">
                    <span class="my-menu">
                        Wszystkie
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".wedding" class=" click">
                    <span class="my-menu">
                        Wesele
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".baptism" class=" click">
                    <span class="my-menu">
                        Chrzest
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".birthday" class=" click">
                    <span class="my-menu">
                        Urodziny
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".communion" class=" click">
                    <span class="my-menu">
                        Komunia św.
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".anniversary" class=" click">
                    <span class="my-menu">
                        Rocznica
                    </span>
                </button>
            </li>
            <li>
                <button data-filter=".other" class=" click">
                    <span class="my-menu">
                        Inne
                    </span>
                </button>
            </li>
        </ul>

    <!-- - -->
    {{--<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
        <!-- - -->
        <h4 class="txt20 m-b-33">
            Galeria tortów
        </h4>

        <!-- Gallery -->
        <div class="wrap-gallery-sidebar isotope-grid flex-w">
            @foreach($photos as $photo)
                <a class="item-gallery-sidebar wrap-pic-w" href="{{ $photo->filename }}" data-lightbox="gallery-footer">
                    <img src="{{ $photo->filename }}" alt="GALLERY">
                </a>
            @endforeach
        </div>
    </div>--}}
</aside>


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('images/intro.jpg');">
    <h2 class="tit6 t-center my-h2">
        Galeria<br>tortów
    </h2>
</section>
<div id="my-gallery" class="col-md-4 t-center">
    @include('flash-messages')
</div>
<!-- Gallery -->
<div class="container" >
    <div class="section-gallery p-t-118 p-b-100">
        {{--<div class="wrap-label-gallery filter-tope-group mysize flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                <span class="my-menu">
                    Wszystkie
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".wedding">
                <span class="my-menu">
                    Wesele
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".baptism">
                <span class="my-menu">
                    Chrzest
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".birthday">
                <span class="my-menu">
                    Urodziny
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".communion">
                <span class="my-menu">
                    Komunia św.
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".anniversary">
                <span class="my-menu">
                    Rocznica
                </span>
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".other">
                <span class="my-menu">
                    Inne
                </span>
            </button>
        </div>--}}


            <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
                @foreach($photos as $photo)
                    <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $photo->tag }}">
                        {{--images/photo-gallery-13.jpg--}}
                        <img src="{{ $photo->filename }}" alt="IMG-GALLERY">

                        <div class="overlay-item-gallery trans-0-4 flex-c-m">
                            <a class="btn-show-gallery flex-c-m fa fa-search" href="{{ $photo->filename }}" data-lightbox="gallery"></a>
                        </div>
                        @auth
                            <a onclick="return confirm('Czy napewno chcesz usunąć to zdjęcie?')"
                               href="{{ route('deletePhoto', ['id' => $photo->id]) }}" class="deletePhoto">
                                <i class="fas fa-times"></i>
                            </a>
                            <a onclick="return confirm('Czy napewno chcesz edytować to zdjęcie?')"
                               href="{{ route('editPhoto', ['id' => $photo->id]) }}" class="editPhoto">
                                <i class="fas fa-edit"></i>
                            </a>
                        @endauth
                    </div>
                @endforeach
            </div>

       {{-- <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
        </div>--}}
    </div>
</div>


<!-- Sign up -->
{{--<div class="section-signup bg1-pattern p-t-85 p-b-85">
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
            <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Sign-up
        </button>
    </form>
</div>--}}


<!-- Footer -->
<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Contact Us
                </h4>

                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        8th floor, 379 Hudson St, New York, NY 10018
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        (+1) 96 716 6879
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        contact@site.com
                    </li>
                </ul>

                <!-- - -->
                <h4 class="txt13 m-b-32">
                    Opening Times
                </h4>

                <ul>
                    <li class="txt14">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class="txt14">
                        Every Day
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Latest twitter
                </h4>

                <div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>

                <div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    Galeria tortów
                </h4>

                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    @for($i=0; $i<(count($birthday)>16 ? 16 : count($birthday)); $i++)
                        <a class="item-gallery-footer wrap-pic-w" href="{{ $birthday[$i]['filename'] }}" data-lightbox="gallery-footer">
                            <img src="{{ $birthday[$i]['filename'] }}" alt="GALLERY">
                        </a>
                    @endfor
                </div>

            </div>
        </div>
    </div>

    <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    <a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                </div>

                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<script>
    $(document).ready(function () {
        $(".click").click(function (){
            $('html, body').animate({
                scrollTop: $("#my-gallery").offset().top
            }, 800);
        });
    });
</script>
</body>
</html>
