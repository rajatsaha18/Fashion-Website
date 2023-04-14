<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/New folder/css/all.css') }}">
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="navbar-brand">Admin</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('add.category') }}" class="dropdown-item">Add Category</a></li>
                        <li><a href="{{ route('manage.category') }}" class="dropdown-item">Manage category</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('index.product') }}" class="dropdown-item">Add Product</a></li>
                        <li><a href="{{ route('manage.product') }}" class="dropdown-item">Manage Product</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Manage Contact</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></li>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf
                </form>
            </ul>
        </div>
    </nav>

    @yield('body')
    <script src="{{ asset('assets/js/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
