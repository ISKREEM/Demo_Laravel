<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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