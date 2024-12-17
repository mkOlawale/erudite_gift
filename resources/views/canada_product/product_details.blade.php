<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product </title>
    <style>
        .sinle_prod_container{
            display: flex;
            padding: 20px;
        }
        .single_title_container{
            padding: 0px 15px;
        }
        .single_title_container > h2{
            font-size: 35px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .single_title_container h4{
            color: blue;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
        }
        .single_title_container button{
            background: blue;
            padding: 10px 25px;
            border: none;
            outline: none;
            border-radius: 5px;

        }
        .single_title_container button a{
            color: white;
            text-decoration: none;
        }
        .single_description{
                padding: 10px;
        }
        .single_description h2{
            text-align: center;
            border-bottom: 1px solid grey;
            padding: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 17px;
        }
        .single_description h3{
            color: grey;
            font-size: 15px;
        }
        .single_related_prod{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
        }
        .single_card{
            width: 190px;
            border: 1px solid lightgray;
            padding: 5px;
        }        
        .single_card img{
            max-width: 170px;
            max-height: 140px;
        }        
        .single_card h4{
            font-size: 11px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }        
        .single_card h5{
            color: blue;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 10px;
        }        
        .single_card button{
            background: blue;
            padding: 10px 25px;
            border: none;
            outline: none;
            border-radius: 5px;
        }        
        .single_card button a{
            color: white;
            text-decoration: none;
        }       
        @media (max-width: 768px) {
            .sinle_prod_container{
                display: flex;
                flex-direction: column;
            }
            .single_related_prod{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
            img{
                width: 250px!important;
            }
        }
 
    </style>
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <a href="#" class="logo">MyStore</a>
    
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
    <div class="sinle_prod_container">
        <div>
            <img src="/product/{{ $prod->image }}" style="max-height: 500px;" alt="">
        </div>
        <div class="single_title_container">
            <h2>{{$prod->title}}</h2>
            <h4>#{{ $prod->price}}</h4>
            <!-- <br> -->
            <button><a href="{{ url('/buy_usa', $prod->id) }}">Buy Now</a></button>
            <br>
            <h5>visa img here</h5>
        </div>
    </div>
    <div class="single_description">
        <h2>Description</h2>
        <h3>{{ $prod->Description}}</h3>
    </div>
    {{-- <h1>Related Products</h1>
    <div class="single_related_prod">
        @foreach($related as $rel)
        <div class="single_card">
            <img src="/product/{{ $product->image }}">
            <h4>{{ $rel->title}}</h4>
            <h5>{{ $rel->price}}</h5>
            <button style="width: 100%;"><a href="#">Buy Now</a></button>
        </div>
       @endforeach
    </div> --}}
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