<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Europe Available Gift</title>
    <link rel="stylesheet" href="/css/homepage.css">
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
</header>
      
      <!-- slider animation -->
      <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="images/resume.png" alt="Image 2"></div>
            <div class="slide"><img src="images/smile.jpg" alt="Image 2"></div>
            <div class="slide"><img src="images/wat.jpg" alt="Image 1"></div>
        </div>
      </div>
      <a href="https://wa.me/2348144179815" class="whatsapp-support">
        <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp Support">
    </a>
      <!--****** slider animation ends here ******-->
    <div>
      <h1 style="text-align: center; padding: 10px;">Available Gift to Europe</h1>  
    </div> <br>
    <div class="prod_feed_container">
     
        <div class="prod_card_container">  
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Flowers & Notes</p>
            <a href="{{ url('europe/flower')}}" class="prod_card_container-title">Click Here</a>

            
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">

            <p class="prod_card_container-category">Teddy Bears</p>
            <a href="{{ url('europe/teddy')}}" class="prod_card_container-title">Click Here</a>

        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Rings</p>
           <a href="{{ url('europe/rings')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Necklace & Jewelries</p>
            <a href="{{ url('europe/jewelry')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Perfumes</p>
            <a href="{{ url('europe/perfume')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Watches</p>
            <a href="{{ url('europe/watch')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Kids Items</p>
            <a href="{{ url('europe/kids')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Clothing & Accessories</p>
            <a href="{{ url('europe/clothing')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Food</p>
            <a href="{{ url('europe/food')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Adult Items</p>
            <a href="{{ url('europe/adult')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Urgent Deliveries</p>
            <a href="{{ url('europe/urgent')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Footwears</p>
            <a href="{{ url('europe/footwear')}}" class="prod_card_container-title">Click Here</a>
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
      document.querySelector('.whatsapp-support').addEventListener('mouseenter', () => {
            const tooltip = document.createElement('div');
            tooltip.innerText = 'Chat with us on WhatsApp!';
            tooltip.className = 'whatsapp-tooltip';
            document.body.appendChild(tooltip);

            const button = document.querySelector('.whatsapp-support');
            const rect = button.getBoundingClientRect();

            tooltip.style.position = 'absolute';
            tooltip.style.top = `${rect.top - 30}px`; /* Position above the button */
            tooltip.style.left = `${rect.left + rect.width / 2 - tooltip.offsetWidth / 2}px`;
        });

        document.querySelector('.whatsapp-support').addEventListener('mouseleave', () => {
            const tooltip = document.querySelector('.whatsapp-tooltip');
            if (tooltip) {
                tooltip.remove();
            }
        });
    </script>
</body>
</html>