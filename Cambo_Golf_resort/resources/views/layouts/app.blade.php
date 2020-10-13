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

    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')  }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')  }}">

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
                    <i class="fa fa-phone"></i> Call Us : +855 10 345 543 &nbsp; &nbsp; <a href="#"><i
                            class="fa fa-envelope"></i> Email : info@golfworld.com</a>
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
                                <li><a href="{{ route('about_us') }}">About us</a></li>
                                <li><a href="{{ route('career_opportunity') }}">Career Opportunity</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('service')}}">Services</a></li>
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
        <footer class="wpm_footer_area">

            <div class="container">

                <div class="row">

                    <div class="col-sm-4">

                        <h3>Get Free Consultation</h3>

                        <p>Available 27/8</p>

                        <h4>(855) 10-345-543</h4>

                    </div>


                    <div class="col-sm-4">

                        <h3>Message Us Now</h3>

                        <p>Available 27/8</p>

                        <a href="#">info@golfworld.com</a>

                    </div>


                    <div class="col-sm-4">

                        <h3>Address Location</h3>

                        <p>55 180 Phnom Penh, 12211 Phnom Penh </p>

                        <a href="https://www.google.com/maps/place/University+of+Puthisastra/@11.5627601,104.9207701,18.75z/data=!4m5!3m4!1s0x3109513ed775f479:0xcac6753bebe2e9d2!8m2!3d11.562662!4d104.9207244">View Map</a>

                    </div>

                </div>

            </div>

        </footer>



        <section class="wpm_frooter_ending">

            <div class="container">

                <div class="col-sm-6 text-left">

                    <div class="wpm_footer_menu wpm_mobile_center">

                        <a href="{{url('home')}}">Home</a>
                        <a href="{{url('service')}}">Services</a>
                        <a href="{{url('reservation')}}">Reservation</a>
                        <a href="{{url('career_opportunity')}}">Career Opportunity</a>

                    </div>

                </div>

                <div class="col-sm-6 text-right wpm_mobile_center">

                    <p>Copyright &copy; 2009-<script>
                            document.write(new Date().getFullYear())
                        </script> <a href="https://www.golfdigest.com/golf-news-tours" target="_blank">Golfworld.com</a></p>
                    <div class="copytext">Design By <a href="http://html5load.com/" target="_blank"
                            class="copylink">html5load.Com</a></div>

                </div>


                <div class="clearfix"></div>

            </div>

        </section>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/Main-script.min.js')}}"></script>
</body>

</html> --}}
