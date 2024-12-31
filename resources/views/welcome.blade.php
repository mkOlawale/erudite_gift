@include('layouts.header')
    <!-- slider animation -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="images/resume.png" alt="Image 2"></div>
            <div class="slide"><img src="images/smile.jpg" alt="Image 2"></div>
            <div class="slide"><img src="images/wat.jpg" alt="Image 1"></div>

            {{-- <div class="slide"><img src="images/slider2.jpg" alt="Image 3"></div> --}}
        </div>
    </div>

    <!--****** slider animation ends here ******-->

    <!-- averts section -->

    <div class="advert_sec" id="about">
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
                <span>Reach us on our support line via WhatsApp or Call on +2348144179815</span>
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
    <a href="https://wa.me/2348144179815" class="whatsapp-support">
        <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp Support">
    </a>

    <!-- country image starts here-->
    <section class="_overall_country_container" id="shop">
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
            <a class="_country_img_contain" href="{{ url('/gift/others_part') }}" style="">
                <img src="images/other.png" width="150" height="150">
                <h3>Other part of america</h3>
            </a>
        </div>

    </section>

    <!--** country section ends here**-->
    <br>
    <!-- footer_section -->
    @include('layouts.footer')