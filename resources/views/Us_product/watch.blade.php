<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/homepage.css">
    <title>Watch to Usa |  </title>
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <img src="images/logo.png" alt="Image 2" width="120" height="50">
            </a>
    
            <!-- Category Dropdown -->
            <div class="dropdown">
                <button class="dropbtn">Categories</button>
                <div class="dropdown-content">
                    <a href="#">Gift to Us</a>
                    <a href="#">Gift to Uk</a>
                    <a href="#">Gift to Canada</a>
                    <a href="#">Gift to Asian</a>
                    <a href="#">Gift to Europe</a>
                    <a href="#">Gift to Others...</a>
                </div>
            </div>
    
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button><img src="/images/search-icon.png" alt="Search"></button>
            </div>
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
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
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
    </header> <br> <br>
    <div class="title_container">
        <p>Home / Shop / US STORE / Watch to Us Store</p>
        <h1>Watch Us Store</h1>
    </div>
    <div class="prod_whole_container">
        <div class="second_flexible_container">
            <!-- <h1>hello world</h1> -->

            <div class="main_prod_cobtainer">
                @foreach($product as $prod)
                <div class="main_prod_card">
                    <img src="/product/{{ $prod->image }}" width="180" height="180">
                    <div  class="info_container">
                        <p>
                            <a href="{{ url('/usa_productdetails', $prod->id) }}" style="color: black;"> {{ $prod->title}} </a>
                        </p>
                        <h5>#{{ $prod->price}}</h5>
                        <button><a href="{{ url('/buy_usa', $prod->id) }}">Buy Now</a></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <div class="first_flexible_container">
            <h4 style="text-align: left; padding: 10px; font-size: 21px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Shop by categories</h4>
            <a href="#">Uncategorized</a>
            <a href="#">Asia & Australia Store</a>
            <a href="#">CANADA STORE</a>
            <a href="#">Other Parts of America Store</a>
            <a href="#">Rest of Europe</a>
            <a href="#">UK STORE</a>
            <a href="#">US STORE</a>
    </div>
    </div>
    <footer class="footer_contain">

        <div style="padding-top: 10px;">
            Logo
        </div>
        <div class="enquiry_container">
            <h3>FOR ENQUIRIES CALL</h3>
            <h5>+2348144179815</h5>
        </div>
  
        <div class="flexible_contain_">
            <div style="padding: 0px 20px;">
                <img src="../images/twit.png" width="30" height="30">
                <img src="../images/instagram.png" width="30" height="30">
            </div>
            <div style="text-align: center; padding: 10px;">
                © 2024 EruditeGift
            </div>
  
            <div>
                <img src="../images/payment-1.png" alt="" width="100">
            </div>
        </div>
        <div>
            <a href="https://wa.me/2348163445421" style="color: white; padding: 20px; font-weight: bold;"> Developed by <span
                    style="color: yellow;">MicroX</span></a>
        </div>
    </footer>
</body>
      <script>
           function toggleMenu() {
              const mobileMenu = document.getElementById('mobileMenu');
              const hamburgerMenu = document.getElementById('hamburgerMenu');
              mobileMenu.classList.toggle('active');
              hamburgerMenu.classList.toggle('active');
          }
</script>
</html>