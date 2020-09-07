<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cambodia Golf Resort') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')  }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css')  }}">

</head>

<body>
    <div id="app">
        <section class="wpm_header_top">
            <div class="row">

                <div class="col-sm-5 text-left">

                    <div class="wpm_social wpm_mobile_center">

                        <a href="#"><i class="fa fa-fw fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>

                    </div>
                </div>


                <div class="col-sm-7 wpm_mobile_center text-right">
                    <i class="fa fa-phone"></i> Call Us : +880 111-111-111 &nbsp; &nbsp; <a href="#"><i
                            class="fa fa-envelope"></i> Email : info@Html5Load.com</a>
                </div>


            </div>
        </section>
        {{-- New nav --}}
        <header class="wpm_header div container">
            <nav class="navbar navbar-default wpm_navber">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"> <img class="wpm_logo" src="images/logo/logo.png"
                            alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right wpm_menu">

                    <li class="active"><a href="{{ route('home') }}">Home</a></li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">
                                Pages <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('career') }}">Career Opportunity</a></li>
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('about') }}">About us</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('reservation') }}">Reservation</a> </li>


                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">
                                News <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('news') }}">News Page</a></li>
                                <li><a href="{{ route('article') }}">News Article</a></li>
                            </ul>
                        </li>


                        <li><a href="{{route('contact')}}">Contact us</a> </li>

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="wpm_footer_area">

        <div class="container">

            <div class="row">

                <div class="col-sm-4">

                    <h3>Get Free Consultation</h3>

                    <p>Available 27/8</p>

                    <h4>(888) 000-456-7890</h4>

                </div>


                <div class="col-sm-4">

                    <h3>Message Us Now</h3>

                    <p>Available 27/8</p>

                    <a href="#">info@Html5Load.com</a>

                </div>


                <div class="col-sm-4">

                    <h3>Address Location</h3>

                    <p>2901 Marmora Road, Glassgow, Seattle, WA 98122-1090 Fax: (888) 123-456-7899 </p>

                    <a href="#">View Map</a>

                </div>

            </div>

        </div>

    </footer>



    <section class="wpm_frooter_ending">

        <div class="container">

            <div class="col-sm-6 text-left">

                <div class="wpm_footer_menu wpm_mobile_center">

                    <a href="home.html">Home</a>
                    <a href="service.html">Services</a>
                    <a href="blog.html">Baog</a>
                    <a href="contact.html">Contact Us</a>

                </div>

            </div>

            <div class="col-sm-6 text-right wpm_mobile_center">

                <p>Copyright &copy; 2009-<script>
                        document.write(new Date().getFullYear())
                    </script> <a href="http://www.html5load.com/" target="_blank">Html5Load.com</a></p>
                <div class="copytext">Design By <a href="http://html5load.com/" target="_blank"
                        class="copylink">html5load.Com</a></div>

            </div>


            <div class="clearfix"></div>

        </div>

    </section>

</body>

</html>
