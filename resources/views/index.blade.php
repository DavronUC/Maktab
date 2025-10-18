<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Asosiy</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Slick carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Custom style for this template -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
<!-- Header Start -->
<header>
    <div class="bannerBox">
        <!-- Header Nav Start -->
        <div class="headerBar">
            <div class="topMainMenu">
                <a href="{{ route('home') }}" class="topMain-logo">
                    <img src="{{ asset('image/Gerb.png') }}" alt="logo" width="8%">
                    <p>10-sonli umumta'lim maktabi</p>
                </a>
                <ul>
                    <li><a href="https://vacancy.argos.uz/">Bo'sh ish o‘rinlari</a></li>
                    <li><a href="{{ url('schoolRules') }}">Maktab qonun-qoidalar</a></li>
                    <li><a href="{{ url('FAQ') }}">Tez-tez beriladigan savollar</a></li>
                    <li><a href="{{ url('stateSymbols') }}">Davlat ramzlari</a></li>
                </ul>
                <div class="additionalFuntions">
                    <a href="#" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
                    <a href="#" class="searchBtn text-white">|
                        <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- responsive overlay menu -->
            <div class="container">
                <div class="headerMenuBox">
                    <div class="bigMenuBtn">
                        <button type="button" class="borderedBtn">
                            <div class="menuBars"></div>
                        </button>
                        <div class="overlay">
                            <div class="container">
                                <div class="topLogoGerb">
                                    <img src="{{ asset('image/Gerb.png') }}" alt="Logo" width="13%">
                                </div>
                                <div class="listMenu">
                                    <ul>
                                        <li><a href="#">Maktab haqida</a>
                                            <ul>
                                                <li><a href="{{ url('schoolTasks') }}">Maktab vazifalari</a></li>
                                                <li><a href="{{ url('leaderShip') }}">Rahbariyat</a></li>
                                                <li><a href="{{ url('teachers') }}">O'qituvchilar</a></li>
                                                <li><a href="{{ url('rekvizit') }}">Rekvizitlar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('education') }}">Ta'lim</a>
                                            <ul>
                                                <li><a href="{{ url('education') }}">1-smena</a></li>
                                                <li><a href="{{ url('education') }}">2-smena</a></li>
                                                <li><a href="{{ url('education') }}">Qo'shimcha darslar</a></li>
                                                <li><a href="{{ url('education') }}">Sport to'garaklar</a></li>
                                            </ul>
                                        </li>
                                        <li class="overlay_li-social"><a href="{{ url('schoolNews') }}">Axborot markazi</a>
                                            <ul>
                                                <li><a href="{{ url('schoolNews') }}">Maktab yangiliklari</a></li>
                                                <li><a href="{{ url('Gallery') }}">Galeriya</a></li>
                                                <li><a href="{{ url('infoGrafika') }}">Infografika</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="simple">
                                        <li><a href="{{ url('usefulResurs') }}">Foydali resurslar</a></li>
                                        <li><a href="{{ url('connect') }}">Bogʻlanish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- main menu -->
                    <div class="mainMenuBox">
                        <div class="menuList">
                            <div class="bottomMainMenu">
                                <ul class="menu">
                                    <li><a href="#">Maktab haqida</a>
                                        <ul class="menu_ul-li">
                                            <li><a href="{{ url('schoolTasks') }}">Maktab vazifalari</a></li><hr>
                                            <li><a href="{{ url('leaderShip') }}">Rahbariyat</a></li><hr>
                                            <li><a href="{{ url('teachers') }}">O'qituvchilar</a></li><hr>
                                            <li><a href="{{ url('rekvizit') }}">Rekvizitlar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('education') }}">Ta'lim </a></li>
                                    <li><a href="{{ url('usefulResurs') }}">Foydali resurslar</a></li>
                                    <li><a href="{{ url('schoolNews') }}">Axborot markazi</a></li>
                                    <li><a href="{{ url('connect') }}">Bogʻlanish</a></li>
                                </ul>
                            </div>

                            <!-- Search -->
                            <form id="w2" class="mainSearchForm" action="{{ url('search') }}" method="get">
                                <div class="input-group">
                                    <input type="text" id="mainSearch" class="form-control" placeholder="Izlash" name="ContentSearch">
                                    <div class="input-group-prepend">
                                        <button class="btn __searchBtn closeBtn" type="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Lang Dropdown -->
                            <div class="dropdown langBar">
                                <button class="borderedBtn" type="button" data-toggle="dropdown">O'z</button>
                                <div class="dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item active" href="/Uz">O'zbekcha</a>
                                    <a class="dropdown-item" href="/Ўзб">Ўзбекча</a>
                                    <a class="dropdown-item" href="/Ru">Русский</a>
                                    <a class="dropdown-item" href="/En">English</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Big logo start -->
        <div class="bigBannerContent" style=" position: relative; background-image: linear-gradient(rgba(0, 50, 120, 0.45), rgba(0, 50, 120, 0.45)), url('{{ asset('image/10-maktab.jpg') }}'); background-size: cover; background-position: center;">
            <div class="bannerContent text-center">
                <h1><b>10-sonli umumta'lim maktabi</b><br>Sirdaryo, Mirzaobod tumani</h1>
                <div class="quote">
                    <p>"Yangi O'zbekiston - maktab ostonasidan boshlanadi"</p>
                    <span>Shavkat Mirziyoyev</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer>
    <div class="footer text-center">
        <img src="{{ asset('image/Gerb.png') }}" alt="Logo" width="10%">
        <p>© 2020-{{ date('Y') }} Barcha huquqlar himoyalangan</p>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('js/tilt.jquery.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

