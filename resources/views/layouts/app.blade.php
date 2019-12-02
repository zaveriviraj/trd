<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    @stack('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a id="companiesDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Companies') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="companiesDropdown">
                                <a class="dropdown-item" href="{{ route('companies.index') }}">{{ __('Company List') }}</a>
                                <a class="dropdown-item" href="{{ route('companies.create') }}">{{ __('Add New') }}</a>
                                <a class="dropdown-item" href="{{ route('favoritelists.index') }}">{{ __('Favorite Lists') }}</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Layouts</h6>
                                <a class="dropdown-item" href="{{ route('layouts.create') }}">{{ __('New Layout') }}</a>
                                <a class="dropdown-item" href="{{ route('layouts.index') }}">{{ __('Saved Layouts') }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="buyersDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Buy Requests') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="buyersDropdown">
                                <a class="dropdown-item" href="{{ route('buyers.index') }}">{{ __('Requests List') }}</a>
                                <a class="dropdown-item" href="{{ route('buyers.create') }}">{{ __('Add New') }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="sellersDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Seller Offers') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="sellersDropdown">
                                <a class="dropdown-item" href="{{ route('sellers.index') }}">{{ __('Offers List') }}</a>
                                <a class="dropdown-item" href="{{ route('sellers.create') }}">{{ __('Add New') }}</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('link') }}">{{ __('Link Buyer / Seller') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inventory') }}">{{ __('Inventory') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="searchDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Search') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="searchDropdown">
                                <a class="dropdown-item" href="{{ route('searches.create') }}">{{ __('New Search') }}</a>
                                <a class="dropdown-item" href="{{ route('searches.index') }}">{{ __('Saved Search') }}</a>
                            </div>
                        </li>
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
                            {{-- <li class="nav-item dropdown">
                                <a id="mastersDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Masters') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="mastersDropdown">
                                    <h6 class="dropdown-header">Company Masters</h6>
                                    <a class="dropdown-item" href="{{ route('priorities.index') }}">{{ __('Priorities') }}</a>
                                    <a class="dropdown-item" href="{{ route('companysizes.index') }}">{{ __('Sizes') }}</a>
                                    <a class="dropdown-item" href="{{ route('companytypes.index') }}">{{ __('Types') }}</a>
                                    <a class="dropdown-item" href="{{ route('companydeals.index') }}">{{ __('Deals In') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Diamond Masters</h6>
                                    <a class="dropdown-item" href="{{ route('sizes.index') }}">{{ __('Sizes') }}</a>
                                    <a class="dropdown-item" href="{{ route('shapes.index') }}">{{ __('Shapes') }}</a>
                                    <a class="dropdown-item" href="{{ route('colors.index') }}">{{ __('Colors') }}</a>
                                    <a class="dropdown-item" href="{{ route('clarities.index') }}">{{ __('Clarities') }}</a>
                                    <a class="dropdown-item" href="{{ route('cuts.index') }}">{{ __('Cuts') }}</a>
                                    <a class="dropdown-item" href="{{ route('certs.index') }}">{{ __('Certs') }}</a>
                                    <a class="dropdown-item" href="{{ route('products.index') }}">{{ __('Products') }}</a>
                                </div>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
