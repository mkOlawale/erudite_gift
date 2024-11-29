<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/homepage.css">
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
          <a href="#">Home</a>
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
            <div class="slide"><img src="images/slider.png" alt="Image 1"></div>
            <div class="slide"><img src="images/slider.png" alt="Image 2"></div>
            <div class="slide"><img src="images/slider2.jpg" alt="Image 3"></div>
        </div>
      </div>
      
      <!--****** slider animation ends here ******-->
      
      <!-- averts section -->
      
        <div class="advert_sec">
            <div class="advert_card">
                <div>
                  <img src="images/deliveryimg.png" width="80" height="80">
                </div>
                <div class="advert_card_txt">
                  <h2>Smooth Shipping</h2>
                  <span>We provide smooth shipping worldwide</span>
                </div>
            </div>
            <div class="advert_card">
                <div>
                  <img src="images/deliveryimg.png" width="80" height="80">
                </div>
                <div class="advert_card_txt">
                  <h2>Best Deals Always</h2>
                  <span>Our onine store provides the best deals for you.</span>
                </div>
            </div>
            <div class="advert_card">
                <div>
                  <img src="images/questionimg.png" width="80" height="80">
                </div>
                <div class="advert_card_txt">
                  <h2>24/7 Customer Care</h2>
                  <span>Reach us on our support line via WhatsApp or Call on +2348139768341</span>
                </div>
            </div>
            <div class="advert_card">
                <div class="advert_card_img">
                  <img src="images/cardimg.png" width="80" height="80">
                </div>
                <div class="advert_card_txt">
                  <h2>Secured Online Payment</h2>
                  <span>Shop and pay securely on our website</span>
                </div>
            </div>
      
           
        </div>
      
      <!--** adverts section ends here**-->
      
      
      <!-- country image starts here-->
          <section class="_overall_country_container">
            <h1>Shop To:</h1>
            <div class="country_container">
               <a class="_country_img_contain" href="{{ url('/gift/usa') }}">
                <img src="images/us.png" width="200" height="200">
                <h3>US</h3>
              </a>
              <a class="_country_img_contain" href="{{ url('/gift/united_kingdom') }}">
                <img src="images/uk.png" width="200" height="200">
                <h3>UK</h3>
              </a>
              <a class="_country_img_contain" href="{{ url('/gift/canada') }}">
                <img src="images/canada.avif" width="300" height="200">
                <h3>Canada</h3>
              </a>
              <a class="_country_img_contain" href="{{ url('/gift/asian') }}">
                <img src="images/asia.png" width="200" height="200">
                <h3>Asian & Australia</h3>
              </a>
            </div>
            <div class="country_container_2">
              <a class="_country_img_contain" href="{{ url('/gift/europe') }}" style="">
                <img src="images/european.png" width="150" height="150">
                <h3>Rest of europe</h3>
              </a>
              <a class="_country_img_contain" href="{{ url('/gift/others_part/world') }}" style="">
                <img src="images/other.png" width="150" height="150">
                <h3>Other part of america</h3>
              </a>
            </div>
             
          </section>
      
      <!--** country section ends here**-->
       <br>
      <!-- footer_section -->
      <footer class="footer_contain">
      
            <div>
              Logo
            </div>
            <div>
              <h3>FOR ENQUIRIES CALL</h3>
              <h5>+2348139768341</h5>
            </div>
      
          <div class="flexible_contain_">
            <div>
              <i></i>
              <i></i>
              <h2>twitter link and inst</h2>
            </div>
            <div>
              © 2024 JojoGlobal
            </div>
      
            <div>
              paypal list
            </div>
          </div>
      </footer>
      <!-- footer_section  ends here-->


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
