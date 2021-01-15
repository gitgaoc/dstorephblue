<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dental Store PH | @yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-primary-rgb shadow-sm">
                <div class="container">
                    <!-- <a href="{{ url('/') }}" class="navbar-brand">
                       Dental Store PH | @yield('title')
                    </a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left side of Navbar -->
                        <ul class="navbar-nav mr-auto"></ul>

                        <!-- Right side of Navbar -->
                        <ul class="navbar-nav">
                            <li class="nav-item mr-4">
                                <a href="{{ url('/about-us') }}" class="nav-link text-white">ABOUT US</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav-item mr-4">
                                <a href="{{ url('/customer-care') }}" class="nav-link text-white">CUSTOMER CARE</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav-item mr-4">
                                <a href="#" class="nav-link text-white">NOTIFICATIONS <i class="fas fa-bell"></i></a>
                            </li> <!-- /.nav-item -->
                            <li class="nav-item mr-4">
                                <a href="#" class="nav-link text-white">SIGN UP</a>
                            </li> <!-- /.nav-item -->
                        </ul>
                    </div>
                </div>
            
            </nav> <!-- /.nav -->

            <div class="mt-5" id="nav2">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/logo/dstorephlogo1.png') }}" alt="" class="img-fluid"></a>
                        </div> <!-- /.col-md-3 -->

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="wrap">
                                        <div class="search">
                                            <input type="text" class=" border-secondary-3 border-left-secondary-1em searchTerm" placeholder="Search Item...">
                                            <button class="bg-secondary-rgb border-secondary-1 searchButton"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div> <!-- /.col-sm-12 -->
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="wrap">
                                        <div class="border-primary-2 action-tabs">
                                        <!-- https://www.geeksforgeeks.org/bootstrap-4-nav-pills/ -->
                                            <nav class="nav nav-pills nav-fill">
                                                <a href="#" class="nav-item nav-link p-0 active">SHOP NOW</a>
                                                <a href="{{ url('/seller') }}" class="nav-item nav-link p-0">SELL NOW</a>
                                                <a href="#" class="nav-item nav-link p-0">TRACK MY ORDER</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div> <!-- /.col-sm-12 -->
                            </div>
                        </div> <!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <div class="wrap">
                                <div class="fas fa-shopping-cart action-icon txt-primary-rgb mr-5"></div>
                                <!-- <div class="fas fa-sign-in-alt action-icon txt-primary-rgb"></div> -->
                                <a href="{{ url('/login') }}"><i class="fas fa-sign-in-alt action-icon txt-primary-rgb"></i></a>
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                </div>
            </div>

            <main class="py-4">
                @section('afternav')
                <div class="promos mb-5">
                    <a href="#"><img src="{{ asset('images/others/promos3.png') }}" alt="" class=""></a>
                </div>
                
                <div class="tagline mb-5 p-2 bg-primary-rgb">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{ asset('images/others/welcometo.png') }}" alt="" class="img-fluid border-primary-1">
                            </div>
                        </div>
                    </div>
                </div>
                @show
                
                @yield('content')
            </main> <!-- /main -->

            <!-- Footer -->
            <div class="footer mt-5">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-md-2 offset-md-5">
                            <div class="footer-row-1">
                                <img src="{{ asset('images/logo/dstorephlogo1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-row-2 bg-secondary-rgb text-center">
                    <h5><?= date('Y') ?> DENTAL STORE. ALL RIGHTS RESERVED.</h5>
                </div>
            </div> <!-- /.footer -->
           
        </div> <!-- /#app -->
    </body>
</html>