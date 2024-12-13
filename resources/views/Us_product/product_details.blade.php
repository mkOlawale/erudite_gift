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
</body>
</html>