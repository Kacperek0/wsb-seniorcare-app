<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest


                        @else
                            @if (Auth::user()->role === 'helper')
                                <div class="topnav">
                                    <a class="nav-item" role="button" href="{{ route('help-requests') }}">Help requests</a>
                                </div>


                            @endif

                            @if (Auth::user()->role === 'senior')
                                <div class="topnav" align="left">
                                    <a class="nav-item" role="button" href="{{ route('new-request') }}">Request for help</a>
                                    <a class="nav-item" role="button" href="{{ route('shopping') }}">Shopping request</a>
                                    <a class="nav-item" role="button" href="{{ route('my-tickets') }}">My requests</a>


                            @endif
                        @endguest

                    </ul>
                    {{-- Middle of Navbar --}}
                    <ul class="navbar-nav ml-auto">
                        @guest

                        @else
                            @if (Auth::user()->role === 'senior')
                            <div class="dropdown">
                            <button type="button" class="btn btn-info" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                                @if ( is_countable(session('cart')) && count(session('cart')) > 0)
                                    <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                @endif
                            </button>
                            <div class="dropdown-menu">
                                <div class="class=col-lg-6 col-sm-6 col-6 total-section text-right">
                                    <?php $total = 0 ?>
                                    @foreach((array) session('cart') as $id => $details)
                                        <?php $total += $details['price'] * $details['quantity'] ?>
                                    @endforeach
                                        <p>
                                            Total:<br><span class="text-info"><b><i>{{ $total }} PLN</i></b></span>
                                        </p>
                                </div>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <b>{{ $details['name'] }}</b><br>
                                                    <span class="price text-info"> PLN{{ $details['price'] }}</span>
                                                    <span class="count">Quantity: {{ $details['quantity'] }}</span>
                                                    <br><br>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif

                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
