<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/icon.png">
    <title>EruditeGift | We Deliver Gift all over the world</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/homepage.css">
</head>

<body>
    <header class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <img src="../images/logo.png" alt="Image 2" width="120" height="50">
            </a>

            <!-- Category Dropdown -->
            <div class="dropdown">
                <button class="dropbtn">Categories</button>
                <div class="dropdown-content">
                    <a href="{{ url('/gift/usa') }}">Gift to Us</a>
                    <a href="{{ url('/gift/united_kingdom') }}">Gift to Uk</a>
                    <a href="{{ url('/gift/canada') }}">Gift to Canada</a>
                    <a href="{{ url('/gift/asian') }}">Gift to Asian</a>
                    <a href="{{ url('/gift/europe') }}">Gift to Europe</a>
                    <a href="#">Gift to Others...</a>
                </div>
            </div>

            <!-- Search Bar -->
            <form class="search-bar" action="{{ url('/search') }}" method="POST">
                @csrf
                <input type="text" name="search" placeholder="Search products...">
                <button>
                    <img src="/images/search-icon.png" alt="Search">
                </button>
            </form>
            <!-- Cart Icon -->
            <div class="cart">
                <a href="#"><img src="/images/cart-icon.png" alt="Cart"></a>
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="authentication_button">
                        <a href="{{ url('orders') }}" class="btn btn-login">My Orders</a>
                        <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-register">Logout</button>
                      </form>
                    </div>
                @else
                    <div class="authentication_button">
                        <a href="{{ route('login') }}" class="btn btn-login">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-register">Register </a>
                    </div>
                @endauth
            @endif
            <!-- Hamburger Menu for Mobile -->
            <div class="hamburger-menu" onclick="toggleMenu()" id="hamburgerMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="{{ url('/') }}">Home</a>
            <a href="#shop">Shop</a>
            <a href="#about">About</a>
            <a href="#">Contact</a>
            @if (Route::has('login'))
                @auth
                <a href="{{ url('orders') }}" class="btn btn-login">My Orders</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" style="width: 100%;" class="btn btn-register">Logout</button>
                @else
                    <a href="{{ route('login') }}" class="btn btn-login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-register">Register</a>
                @endauth
            @endif
        </div>
    </header>
    <br> <br> <br> <br>
