@include('layouts.header')

    <div class="title_container">
        <p>Home / Shop / Canada STORE / Customize FanCard and Atm to Us Store</p>
        <h1>Customize Fancard and ATm Canada Store</h1>
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
                            <a href="{{ url('/canada_productdetails', $prod->id) }}" style="color: black;"> {{ $prod->title}} </a>
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
    @include('layouts.footer')
