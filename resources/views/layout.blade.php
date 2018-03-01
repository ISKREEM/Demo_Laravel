<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop - Laravel 5.6</title>
</head>
<body>
    <!-- Navigation -->
    <?php function activeMenu($url){
        return request()->is($url) ? 'active' : '';   
       } ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{activeMenu('/')}}">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item {{activeMenu('about')}}">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item {{activeMenu('contact')}}">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item {{activeMenu('item')}}">
                        <a class="nav-link" href="{{route('item')}}">Shop item</a>
                    </li>
                    <li class="nav-item {{activeMenu('shop')}}">
                        <a class="nav-link" href="{{route('shop')}}">Shop page</a>
                    </li>
                    {{-- //login section --}}

                    @if (auth()->guest())
                    <li class="nav-item {{activeMenu('login')}}">
                        <a class="nav-link" href="/login">Sign in</a>
                    </li>
                    @endif

                    @if (auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-header">Sign in as {{ auth()->user()->usUserName}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Your profile</a>
                            <a class="dropdown-item" href="#">Your orders</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="/logout">Sign out</a>
                        </div>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
        @yield('content')
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website {{date('Y')}}</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>