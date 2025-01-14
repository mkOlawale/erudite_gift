<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Delivery info Checkout form</title>

    <style>
        *{
            /* padding: 0;
            margin: 0; */
            box-sizing: border-box;
        }
        .prod_name{
            background: #edf2f7;
            padding: 15px 20px;
            border-left: 5px solid #2457aa;
            font-size: 8px;
        }
        .payment_whole_container{
            display: grid;
            grid-template-columns: repeat(2, 1fr)!important;
        }
        .form_main{
           padding: 20px;
           font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        label{
            display: block;
            padding: 10px 0px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        /* General wrapper styling for positioning */
        .file-input-wrapper {
        position: relative;
        display: inline-block;
        width: 150px;
        }

        /* Hide the default file input */
        .custom-file-input {
        position: absolute;
        top: 0;
        right: 0;
        opacity: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
        }

        /* Style the custom label */
        .custom-file-label {
        display: block;
        width: 100%;
        padding: 10px 15px;
        background-color: #2457aa;
        color: white;
        text-align: center;
        font-family: Arial, sans-serif;
        font-size: 14px;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        }
        input{
            padding: 9px;
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid #edf2f7;
        }
        select{
            padding: 9px;
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid #edf2f7;
        }
        input[type="submit"]{
            background-color: #2457aa;
            color: #fff;
            cursor: pointer;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .flex_input{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        textarea{
            width: 100%;
        }
        img{
            width: 600px;
            height: 150px;
        }
        p{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        @media (max-width: 768px) {
            .payment_whole_container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            img{
                width: 300px;
                height: 100px;
                margin-left: 10px;
            }
            .flex_input{
                display: flex;
                flex-direction: column;
            }
            .flex_input:nth-child(2){
             margin-left: -10px!important;
            }
        }
    </style>
</head>
<body>
    <div class="whole_form_container"> <br><br>
        <div class="prod_name">
            <h1>“{{ $product->title}}” has been added to your cart.</h1>
        </div>
        <form class="payment_whole_container"  method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            @csrf
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="{{ $product->price }}">
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

            <section class="form_main">
                <div class="file-input-wrapper">
                    <label for="file-upload" class="custom-file-label">Click Choose a file</label>
                    <input id="file-upload" type="file" class="custom-file-input" name="image">
                  </div>
            <div class="flex_input">
                <div>
                     <label for="Reciever">Reciever First Name</label>
                <input type="text" name="Rname" id="Rname" placeholder="Enter Reciever's first name">
                <input type="hidden" name="title" id="title" value="{{ $product->title }}">
                <input type="hidden" name="Category" id="Category" value="{{ $product->Category}}">
                </div>
                <div style="margin-left: 10px;">
                     <label for="Reciever">Reciever Others Name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter Reciever's last name">
                </div>
               
            </div>
            <div>
                <label for="snumber">Your email</label>
                <input type="email" name="email" placeholder="Enter Your Email Address"> 
            </div>
            <div>
                <label for="snumber">Your WhatsApp Number *</label>
                <input type="number" name="snumber" placeholder="Enter Your WhatsApp Number"> 
            </div>

            <div>
                <label for="snumber">Country or Region *</label>
                <select name="Country" class="input_color" >
                    <option value="" selected="">Select a Country</option>
                    <option value="us">United State</option>
                    <option value="uk">United Kingdom</option>
                    <option value="Canada">Canada</option>
                    <option value="Asian">Asian</option>
                    <option value="Europe">Europe</option>
                  </select>
               
            </div>

            <div>
                <label for="snumber">State *</label>
                <input type="text" name="state" placeholder="Enter the state which you are sending gift" > 
            </div>
            <div>
                <label for="snumber">Street address * *</label>
                <input  type="text" name="address" placeholder="Enter the reciever address here"> 
            </div>
            <div>
                <label for="scity">City</label>
                <input type="text" name="city" > 
            </div>
            <div>
                <label for="snumber">Enter Recievers phone Number (optional) </label>
                <input type="text" name="r_number" placeholder="Enter own email address here"> 
            </div>
            <div>
                <label for="snumber">Additional Information (optional) </label>
                <textarea type="text" name="notes" placeholder="Notes about your order or additional information you want to send"> </textarea>
            </div>
        </section>

        <div class="s_payment_container">
            {{-- hidden  important input --}}
            {{-- <input type="hidden" name="email" value=""> required --}}
                       <h3>Product</h3>
            <div class="prod_name">
                <h1>“{{ $product->title}}" has been added to your cart.</h1>
            </div>
            <img src="/images/paystack.webp" alt="paystack payment image">
            <p>
                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
            </p>

            <input type="submit" value="Place Order">
        </div>
    </form>
     
    </div>
  </body>
  </html>