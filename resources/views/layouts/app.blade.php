<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'شـاليه') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }

        .back {
            background-image: url('/storage/images/navbarBackground.jpg');
            padding-bottom: 25em;
        }

        .big-text {
            font-size: 2em;
        }

        .mid-text {
            font-size: 1.3em;
        }

        #content {
            position: relative;
        }

        #nav {
            position: absolute;
            left: 0%;

        }

        /* #navbarSupportedContent{
            position: absolute;

        } */
        #sideNav {
            position: absolute;
            left: 100%;
            width: 50%;
            min-height: 100%;
            z-index: 55;
            background-color: whitesmoke;
        }

        .marTop {
            margin-top: 25%;
        }

        @media only screen and (max-width: 600px) {
            .marTop {
                margin-top: 75%;
            }
        }
        .my-container{
            margin-left:15%;
            margin-right:15%;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="content">
            <div id="sideNav">
                <div class="text-center">
                    <div class="mt-5">
                        <p class="big-text">
                            <img src="/storage/logo/logl1.png" width="45" height="45" class="d-inline-block align-top" alt="">
                            شاليه
                        </p>
                    </div>
                    <br>

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav" style="padding-inline-start:0px;">
                        <li class="nav-item w-100 ml-0">
                            <a class="nav-link mid-text" href="{{ route('login') }}"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mid-text" href="{{ route('index.shalehat') }}">الشاليهات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mid-text" href="{{ route('admin.add.shaleh') }}">اضافة شاليه</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" style="padding-inline-start:0px;">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link mid-text" href="{{ route('login') }}">تسجيل الدخول</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link mid-text" href="{{ route('register') }}">تسجيل جديد</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            <nav id="nav" class="navbar navbar-expand-md navbar-dark shadow-sm back w-100">
                <div class="container">
                    <a class="navbar-brand big-text" href="{{ url('/') }}">
                        <img src="/storage/logo/logl1.png" width="45" height="45" class="d-inline-block align-top" alt="">
                        {{-- {{ config('app.name', 'شـاليه') }} --}}
                        شـاليه
                    </a>
                    <button id="buttonNav" class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link mid-text" href="{{ route('login') }}"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mid-text" href="{{ route('index.shalehat') }}">الشاليهات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mid-text" href="{{ route('admin.add.shaleh') }}">اضافة شاليه</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link mid-text" href="{{ route('login') }}">تسجيل الدخول</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link mid-text" href="{{ route('register') }}">تسجيل جديد</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        $('#buttonNav').click(function(){
            // $('#navbarSupportedContent').show();
            let left = $('#sideNav').position().left;
            if(left == 0 )
            {
                $('#sideNav').animate({left:'100%'},700);
                $('#nav').animate({left:'0%'},700);
            }else {
                $('#sideNav').animate({left:'0%'},700);
                $('#nav').animate({left:'50%'},700);
            }

        });

    </script>
</body>

</html>
