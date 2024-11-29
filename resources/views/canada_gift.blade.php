<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gift to Canada</title>
    <link rel="stylesheet" href="/css/homepage.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
          <!-- Logo -->
          <a href="/" class="logo">MyStore</a>
          
          <!-- Category Dropdown -->
          <div class="dropdown">
            <button class="dropbtn">Categories</button>
            <div class="dropdown-content">
              <a href="#">Electronics</a>
              <a href="#">Fashion</a>
              <a href="#">Home & Living</a>
              <a href="#">Sports</a>
              <a href="#">Books</a>
              <a href="#">More...</a>
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
          <div class="authentication_button">
            <a href="#">Login</a>
            <a href="#">Register  </a>
          </div>
      
          <!-- Hamburger Menu for Mobile -->
          <div class="hamburger-menu" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
          <a href="/">Home</a>
          <a href="#">Shop</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
          <a href="#" style="color: red;">Login</a>
          <a href="#" style="color: yellow;">Register</a>
        </div>
      </header>
      
      <!-- slider animation -->
      <div class="slider-container">
        <div class="slider">
          <div class="slide"><img src="../images/slider.png" alt="Image 1"></div>
          <div class="slide"><img src="../images/slider.png" alt="Image 2"></div>
          <div class="slide"><img src="../images/slider2.jpg" alt="Image 3"></div>
        </div>
      </div>
      
      <!--****** slider animation ends here ******-->
    <div>
      <h1 style="text-align: center; padding: 10px;">Available Gift to Canada</h1>  
    </div> <br>
    <div class="prod_feed_container">
     
        <div class="prod_card_container">  
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Flowers & Notes</p>
            <a href="#" class="prod_card_container-title">Click Here</a>

            
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">

            <p class="prod_card_container-category">Teddy Bears</p>
            <a href="#" class="prod_card_container-title">Click Here</a>

        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Rings</p>
           <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Necklace & Jewelries</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Perfumes</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Watches</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Kids Items</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Clothing & Accessories</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Food</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Adult Items</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Urgent Deliveries</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Footwears</p>
            <a href="#" class="prod_card_container-title">Click Here</a>
        </div>

    </div>

    <script>
        function toggleMenu() {
          const mobileMenu = document.getElementById('mobileMenu');
          mobileMenu.classList.toggle('active');
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