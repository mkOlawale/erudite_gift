@include('layouts.header')
      <!-- slider animation -->
      <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="../images/resume.png" alt="Image 2"></div>
            <div class="slide"><img src="../images/smile.jpg" alt="Image 2"></div>
            <div class="slide"><img src="../images/wat.jpg" alt="Image 1"></div>
        </div>
      </div>
      <a href="https://wa.me/2348144179815" class="whatsapp-support">
        <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp Support">
    </a>
      <!--****** slider animation ends here ******-->
    <div>
      <h1 style="text-align: center; padding: 10px;">Available Gift to Canada</h1>  
    </div> <br>
    <div class="prod_feed_container"> 
     
        <div class="prod_card_container">  
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Flowers & Notes</p>
            <a href="{{ url('canada/flower')}}" class="prod_card_container-title">Click Here</a>

            
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">

            <p class="prod_card_container-category">Teddy Bears</p>
            <a href="{{ url('canada/teddy')}}" class="prod_card_container-title">Click Here</a>

        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Rings</p>
           <a href="{{ url('canada/rings')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Necklace & Jewelries</p>
            <a href="{{ url('canada/jewelry')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Perfumes</p>
            <a href="{{ url('canada/perfume')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Watches</p>
            <a href="{{ url('canada/watch')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Kids Items</p>
            <a href="{{ url('canada/kids')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Clothing & Accessories</p>
            <a href="{{ url('canada/clothing')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Food</p>
            <a href="{{ url('canada/food')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Adult Items</p>
            <a href="{{ url('canada/adult')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Urgent Deliveries</p>
            <a href="{{ url('canada/urgent')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Footwears</p>
            <a href="{{ url('canada/footwear')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Customize Items</p>
            <a href="{{ url('canada/items')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Customize Fan Card & Atm</p>
            <a href="{{ url('canada/fancard')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Document</p>
            <a href="{{ url('canada/document')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Car Key</p>
            <a href="{{ url('canada/car')}}" class="prod_card_container-title">Click Here</a>
        </div>
    </div>
    @include('layouts.footer')