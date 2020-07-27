<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'artisans') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet"> -->
    <style>
    .bg-white {
        background-color: #212124;
        ;
        color: white;
    }
    </style>
</head>
<!-- <body style="background-image: url('{{ asset('/images/background.jpg')}}');"> -->

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @if(Auth::User())
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Artisans') }}
                </a>
                <a class="navbar-brand" href="{{ url('/event') }}">
                    Events
                </a>
                @endif
                @guest
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Artisans') }}
                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                        <a href="#" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                            <img src="/images/{{Auth::User()->avatar}}"
                                style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                        </a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a id="profile" class="dropdown-item" href="/profile">User Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer class="footer-wrapper">

        <div class="main-footer">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 col-md-9">

                        <div class="row">

                            <div class="col-sm-6 col-md-4">

                                <div class="footer-about-us">
                                    <h5 class="footer-title">About Artisans</h5>
                                    <p>Artisans is a place where you meet different artisans all over the globe that can
                                        help get your job done in know time, It also present you with the current events
                                        happing in Benue state Nigerian.</p>

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-5 mt-30-xs">
                                <h5 class="footer-title">Quick Links</h5>
                                <ul class="footer-menu clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/login">Artisans</a></li>
                                    <li><a href="/event" target="_blank">Events</a></li>

                                    <li><a href="../contact.php">Contact Us</a></li>
                                    <li><a href="#">Go to top</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-3 mt-30-sm">

                        <h5 class="footer-title">Valuebeam Contact</h5>

                        <p>Address : Makurdi</p>
                        <p>Email : <a href="mailto:nostress@gmail.com">ulaghaondo@gmail.com</a></p>
                        <p>Phone : <a href="tel:+2340786428550">+2340786428550</a></p>


                    </div>


                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="row">

                    <div class="col-sm-4 col-md-4">

                        <p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> artisans.com</p>

                    </div>

                    <div class="col-sm-4 col-md-4">

                        <ul class="bottom-footer-menu">
                            <li><a>Developed by Valueneam Nig Ltd</a></li>
                        </ul>

                    </div>

                    <div class="col-sm-4 col-md-4">
                        <ul class="bottom-footer-menu for-social">
                            <li><a href=""><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top"
                                        title="twitter"></i></a></li>
                            <li><a href=""><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top"
                                        title="facebook"></i></a></li>
                            <li><a href=""><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top"
                                        title="instagram"></i></a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </footer>

    </div>

    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>