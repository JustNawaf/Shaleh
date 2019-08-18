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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css" media="all"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/82a6a22d16.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #background-image-fixed {
            /* background-color:#C4C4C4; */
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -5;
            ;
            background-image: url('/storage/images/navbarBackground2.jpg');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        * {
            font-family: 'Cairo', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .back {
            /* background-color:#343434; */
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

        .my-container {
            margin-left: 15%;
            margin-right: 15%;
        }

        .main-div {
            position: relative;
        }

        .sub-div {
            position: absolute;
            z-index: 2;
        }

        .background-shadow {
            position: absolute;
            background: rgba(0, 0, 0, 0.40);
            z-index: 1;
        }

        .title-text {
            font-size: 2.5em;
        }

        .desc-text {
            font-size: 1.5em;
        }

        .my-shadow {
            -webkit-box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
            box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
        }

        .background-black {
            background: rgba(0, 0, 0, 0.49);
            position: fixed;
            height: 100vmax;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0%;
            margin-bottom: calc(50% - 50vw);
            z-index: -2;
            width: 100%;
            /* height: 100%; */
        }

        .large-text-subject {
            font-size: 4em;
        }

        .medium-text-subject {
            font-size: 2em;
        }

        .subject {
            position: absolute;
            top: 0%;
            z-index: -1;
        }

        @media only screen and (max-width: 600px) {
            .title-text {
                font-size: 2em;
            }

            .desc-text {
                font-size: 1em;
            }

            .my-shadow {
                -webkit-box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
                -moz-box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
                box-shadow: 0px 11px 37px -10px rgba(0, 0, 0, 0.25);
            }


        }

        .n-checkbox {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            top: 0%;
            left: 0%;
            right: 0%;
            bottom: 0%;
        }

        .n-checkbox-shadow {
            color: green;
        }
    </style>
</head>

<body>
    <div id="background-image-fixed">
    </div>
    <div id="app" class="m-0 p-0 m-auto m-lg-0">
        <div class="content">
            <div id="sideNav" style="height:100vh;">
                <div class="text-center">
                    <div class="mt-5">
                        <p class="big-text">
                            <img src="/storage/logo/logl1.png" width="45" height="45" class="d-inline-block align-top"
                                alt="">
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
            <nav id="nav" class="navbar navbar-expand-md navbar-dark  back w-100 position-relative">
                <div class="container">
                    <a class="navbar-brand big-text" href="{{ url('/') }}">
                        <img src="/storage/logo/logl1.png" width="45" height="45" class="d-inline-block align-top"
                            alt="">
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

        @yield('content')
    </div>
    <div class="background-black">
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
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
