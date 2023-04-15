<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!--Nav Section Start-->
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">Fashion House</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('category',['id' => $category->id]) }}" class="dropdown-item">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li><a href="{{ route('booking') }}" class="nav-link">Booking</a></li>
            </ul>
        </div>
    </nav>
    <!--Nav Section End-->

    @yield('body')

    <!--Footer Section Start-->

    <section class="py-3 m-auto bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Design & Develop By <b>Rajat Saha</b></p>
                </div>
            </div>
        </div>
    </section>

    <!--Footer Section End-->


    <script src="{{ asset('assets/js/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
