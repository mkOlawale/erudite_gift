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
      <h1 style="text-align: center; padding: 10px;">Asian Available Gift</h1>  
    </div> <br>
    <div class="prod_feed_container">
     
        <div class="prod_card_container">  
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Flowers & Notes</p>
            <a href="{{ url('asian/flower')}}" class="prod_card_container-title">Click Here</a>

            
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">

            <p class="prod_card_container-category">Teddy Bears</p>
            <a href="{{ url('asian/teddy')}}" class="prod_card_container-title">Click Here</a>

        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Rings</p>
           <a href="{{ url('asian/rings')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Necklace & Jewelries</p>
            <a href="{{ url('asian/jewelry')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Perfumes</p>
            <a href="{{ url('asian/perfume')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Watches</p>
            <a href="{{ url('asian/watch')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Kids Items</p>
            <a href="{{ url('asian/kids')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Clothing & Accessories</p>
            <a href="{{ url('asian/clothing')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Food</p>
            <a href="{{ url('asian/food')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Adult Items</p>
            <a href="{{ url('asian/adult')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Urgent Deliveries</p>
            <a href="{{ url('asian/urgent')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Footwears</p>
            <a href="{{ url('asian/footwear')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Customize Items</p>
            <a href="{{ url('us/adult')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Customize Fan Card & Atm</p>
            <a href="{{ url('us/urgent')}}" class="prod_card_container-title">Click Here</a>
        </div>
        <div class="prod_card_container">
            <img src="../images/gift-box.png" alt="" width="30" height="30">
            <p class="prod_card_container-category">Document</p>
            <a href="{{ url('us/footwear')}}" class="prod_card_container-title">Click Here</a>
        </div>
    </div>
    @include('layouts.footer')