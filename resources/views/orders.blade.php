<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>
    <link rel="stylesheet" href="/css/homepage.css">
    <style>
        /* Table Container */
    .table-container {
        margin: 20px auto;
        padding: 20px;
        max-width: 100%;
        overflow-x: auto; /* Makes the table scrollable horizontally on smaller screens */
        /* background: #fff; */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    /* Table Styling */
    .responsive-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 14px;
    }
    
    /* Table Header */
    .responsive-table thead {
        background: #007bff;
        color: #fff;
    }
    
    .responsive-table thead th {
        padding: 12px 8px;
        text-transform: uppercase;
        font-size: 12px;
    }
    
    /* Table Body */
    .responsive-table tbody tr:nth-child(even) {
        background: #f8f9fa;
    }
    
    .responsive-table tbody tr:hover {
        background: #f1f1f1;
    }
    
    .responsive-table tbody td {
        padding: 10px 8px;
        border: 1px solid #ddd;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .responsive-table thead {
            /* display: none; */
        }
    
        .responsive-table tbody td {
            display: block;
            text-align: right;
            position: relative;
            padding-left: 50%;
            white-space: nowrap;
        }
    
        .responsive-table tbody td:before {
            content: attr(data-label);
            position: absolute;
            left: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }
    }
    
        </style>
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
</header> <br> <br> <br>
    <section>
        <div class="table-container">
        <table class="responsive-table">
            <thead>
            <tr>
                <th class="th_header">Title</th>
                <th class="th_header">To</th>
                <th class="th_header">Price</th>
                <th class="th_header">Payment</th>
                <th class="th_header">Delivery Status</th>
                <th class="th_header">Date</th>
            </tr>
          </thead>
        @if($orders)
        @foreach($orders as $order)
            <tbody>
                <tr>
                    <td>{{$order->title}}</td>
                    <td>{{$order->first_name}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>{{$order->date}}</td>
                </tr>
            </tbody>
       <hr>
        @endforeach
        @else
        <h1 style="color: #333;">You Haven't send any gift yet</h1>
        @endif
        </table>
        </div>
    </section>

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
  <script>
        function toggleMenu() {
          const mobileMenu = document.getElementById('mobileMenu');
          const hamburgerMenu = document.getElementById('hamburgerMenu');
          mobileMenu.classList.toggle('active');
          hamburgerMenu.classList.toggle('active');
      }
    
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    
    function moveToNextSlide() {
        currentIndex++;
        if (currentIndex >= slides.length) {
            currentIndex = 0;
        }
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
    
    // Automatically slide every 3 seconds
    setInterval(moveToNextSlide, 3000);
  </script>
</body>
</html>