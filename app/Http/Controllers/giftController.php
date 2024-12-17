<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\usaproduct;
use App\Models\ukproduct;
use App\Models\otherproduct;
use App\Models\canadaproduct;
use App\Models\europeproduct;
use App\Models\asianproducts;


class giftController extends Controller
{
    public function redirect(){
        $usertype = Auth::User()->usertype;

        if($usertype==='1'){
            return view('admin.home');
        }
        else
        {
         return view('welcome');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Log out the authenticated user
    
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token
    
        return redirect('/'); // Redirect to homepage or login page
    }

    public function us_available_gift(){
        return view('usa_gift');
    }
    public function gift_to_uk(){
        return view('unitedk_gift');
    }
    public function canadaGift(){
        return view('canada_gift');
    }
    public function AsianGift(){
        return view('asiangift');
    }
    public function europeGift(){
        return view('europegift');
    }
    public function othersGift(){
        return view('others');
    }
    public function UsaProductsDetails($id){

        $prod = usaproduct::find($id);
        // $related = usaproduct::paginate(12);

        return view('Us_product.product_details', compact('prod'));
    }
    public function formUsa($id){
        $product = usaproduct::find($id);
        $email = 'abeebolaking1@gmail.com';
        return view('paystack', compact('product', 'email'));
    }
    public function formUk($id){
        $product = ukproduct::find($id);

        return view('paystack', compact('product'));
    }
    public function formEurope($id){
        $product = europeproduct::find($id);

        return view('paystack', compact('product'));
    }
    public function formCanada($id){
        $product = canadaproduct::find($id);

        return view('paystack', compact('product'));
    }
    public function formAsian($id){
        $product = asianproduct::find($id);

        return view('paystack', compact('product'));
    }
    public function UkProductsDetails($id){

        $prod = ukproduct::find($id);

        return view('Uk_product.product_details', compact('prod'));
    }
    public function EuropeProductsDetails($id){

        $prod = europeproduct::find($id);

        return view('Europe_product.product_details', compact('prod'));
    }
    public function CanadaProductsDetails($id){

        $prod = canadaproduct::find($id);

        return view('Us_product.product_details', compact('prod'));
    }
    public function AsianProductsDetails($id){

        $prod = asianproduct::find($id);

        return view('Us_product.product_details', compact('prod'));
    }
    public function jewelry(){
        $product = usaproduct::where('Category','Necklace&Jewelries')->get();
        return view('Us_product.jewelry', compact('product'));
    }
    public function usadult(){
        $product = usaproduct::where('Category','Adult Items')->get();
        return view('Us_product.adult', compact('product'));
    }
    public function usaclothing(){
        $product = usaproduct::where('Category','Clothing&Accessories')->get();
        return view('Us_product.clothing', compact('product'));
    }
    public function usaFlower(){
        $product = usaproduct::where('Category','Flowers&Notes')->get();
        return view('Us_product.flowers', compact('product'));
    }
    public function usaFood(){
        $product = usaproduct::where('Category','Food')->get();
        return view('Us_product.food', compact('product'));
    }
    public function usaFootwear(){
        $product = usaproduct::where('Category','Footwears')->get();
        return view('Us_product.footwear', compact('product'));
    }
    public function usaKids(){
        $product = usaproduct::where('Category','KidsItems')->get();
        return view('Us_product.kids', compact('product'));
    }
    public function usaPerfume(){
        $product = usaproduct::where('Category','Perfumes')->get();
        return view('Us_product.perfume', compact('product'));
    }
    public function usaRings(){
        $product = usaproduct::where('Category','Rings')->get();
        return view('Us_product.rings', compact('product'));
    }
    public function usaTeddy(){
        $product = usaproduct::where('Category','TeddyBears')->get();
        return view('Us_product.teddy', compact('product'));
    }
    public function usaUrgent(){
        $product = usaproduct::where('Category','Urgent Deliveries')->get();
        return view('Us_product.urgent', compact('product'));
    }
    public function usaWatch(){
        $product = usaproduct::where('Category','Watches')->get();
        return view('Us_product.watch', compact('product'));
    }
    public function ProductsDetails($id){

        $product = product::find($id);

        return view('home.product_details', compact('product'));
    }

    // uk product single
    public function ukjewelry(){
        $product = ukproduct::where('Category','Necklace&Jewelries')->get();
        return view('Uk_product.jewelry', compact('product'));
    }
    public function ukdult(){
        $product = ukproduct::where('Category','Adult Items')->get();
        return view('Uk_product.adult', compact('product'));
    }
    public function ukclothing(){
        $product = ukproduct::where('Category','Clothing&Accessories')->get();
        return view('Uk_product.clothing', compact('product'));
    }
    public function ukFlower(){
        $product = ukproduct::where('Category','Flowers&Notes')->get();
        return view('Uk_product.flowers', compact('product'));
    }
    public function ukFood(){
        $product = ukproduct::where('Category','Food')->get();
        return view('Uk_product.food', compact('product'));
    }
    public function ukFootwear(){
        $product = ukproduct::where('Category','Footwears')->get();
        return view('Uk_product.footwear', compact('product'));
    }
    public function ukKids(){
        $product = ukproduct::where('Category','KidsItems')->get();
        return view('Uk_product.kids', compact('product'));
    }
    public function ukPerfume(){
        $product = ukproduct::where('Category','Perfumes')->get();
        return view('Uk_product.perfume', compact('product'));
    }
    public function ukRings(){
        $product = ukproduct::where('Category','Rings')->get();
        return view('Uk_product.rings', compact('product'));
    }
    public function ukTeddy(){
        $product = ukproduct::where('Category','TeddyBears')->get();
        return view('Uk_product.teddy', compact('product'));
    }
    public function ukUrgent(){
        $product = ukproduct::where('Category','Urgent Deliveries')->get();
        return view('Uk_product.urgent', compact('product'));
    }
    public function ukWatch(){
        $product = ukproduct::where('Category','Watches')->get();
        return view('Uk_product.watch', compact('product'));
    }


    // canada product single
    public function canadajewelry(){
        $product = canadaproduct::where('Category','Necklace&Jewelries')->get();
        return view('canada_product.jewelry', compact('product'));
    }
    public function canadadult(){
        $product = canadaproduct::where('Category','Adult Items')->get();
        return view('canada_product.adult', compact('product'));
    }
    public function canadaclothing(){
        $product = canadaproduct::where('Category','Clothing&Accessories')->get();
        return view('canada_product.clothing', compact('product'));
    }
    public function canadaFlower(){
        $product = canadaproduct::where('Category','Flowers&Notes')->get();
        return view('canada_product.flowers', compact('product'));
    }
    public function canadaFood(){
        $product = canadaproduct::where('Category','Food')->get();
        return view('canada_product.food', compact('product'));
    }
    public function canadaFootwear(){
        $product = canadaproduct::where('Category','Footwears')->get();
        return view('canada_product.footwear', compact('product'));
    }
    public function canadaKids(){
        $product = canadaproduct::where('Category','KidsItems')->get();
        return view('canada_product.kids', compact('product'));
    }
    public function canadaPerfume(){
        $product = canadaproduct::where('Category','Perfumes')->get();
        return view('canada_product.perfume', compact('product'));
    }
    public function canadaRings(){
        $product = canadaproduct::where('Category','Rings')->get();
        return view('canada_product.rings', compact('product'));
    }
    public function canadaTeddy(){
        $product = canadaproduct::where('Category','TeddyBears')->get();
        return view('canada_product.teddy', compact('product'));
    }
    public function canadaUrgent(){
        $product = canadaproduct::where('Category','Urgent Deliveries')->get();
        return view('canada_product.urgent', compact('product'));
    }
    public function canadaWatch(){
        $product = canadaproduct::where('Category','Watches')->get();
        return view('canada_product.watch', compact('product'));
    }


    // Europe product single
    public function europejewelry(){
        $product = europeproduct::where('Category','Necklace&Jewelries')->get();
        return view('Europe_product.jewelry', compact('product'));
    }
    public function europedult(){
        $product = europeproduct::where('Category','Adult Items')->get();
        return view('Europe_product.adult', compact('product'));
    }
    public function europeclothing(){
        $product = europeproduct::where('Category','Clothing&Accessories')->get();
        return view('Europe_product.clothing', compact('product'));
    }
    public function europeFlower(){
        $product = europeproduct::where('Category','Flowers&Notes')->get();
        return view('Europe_product.flowers', compact('product'));
    }
    public function europeFood(){
        $product = europeproduct::where('Category','Food')->get();
        return view('Europe_product.food', compact('product'));
    }
    public function europeFootwear(){
        $product = europeproduct::where('Category','Footwears')->get();
        return view('Europe_product.footwear', compact('product'));
    }
    public function europeKids(){
        $product = europeproduct::where('Category','KidsItems')->get();
        return view('Europe_product.kids', compact('product'));
    }
    public function europePerfume(){
        $product = europeproduct::where('Category','Perfumes')->get();
        return view('Europe_product.perfume', compact('product'));
    }
    public function europeRings(){
        $product = europeproduct::where('Category','Rings')->get();
        return view('Europe_product.rings', compact('product'));
    }
    public function europeTeddy(){
        $product = europeproduct::where('Category','TeddyBears')->get();
        return view('Europe_product.teddy', compact('product'));
    }
    public function europeUrgent(){
        $product = europeproduct::where('Category','Urgent Deliveries')->get();
        return view('Europe_product.urgent', compact('product'));
    }
    public function europeWatch(){
        $product = europeproduct::where('Category','Watches')->get();
        return view('Europe_product.watch', compact('product'));
    }


    // Asian product single
    public function asianjewelry(){
        $product = asianproducts::where('Category','Necklace&Jewelries')->get();
        return view('asian_product.jewelry', compact('product'));
    }
    public function asiandult(){
        $product = asianproducts::where('Category','Adult Items')->get();
        return view('asian_product.adult', compact('product'));
    }
    public function asianclothing(){
        $product = asianproducts::where('Category','Clothing&Accessories')->get();
        return view('asian_product.clothing', compact('product'));
    }
    public function asianFlower(){
        $product = asianproducts::where('Category','Flowers&Notes')->get();
        return view('asian_product.flowers', compact('product'));
    }
    public function asianFood(){
        $product = asianproducts::where('Category','Food')->get();
        return view('asian_product.food', compact('product'));
    }
    public function asianFootwear(){
        $product = asianproducts::where('Category','Footwears')->get();
        return view('asian_product.footwear', compact('product'));
    }
    public function asianKids(){
        $product = asianproducts::where('Category','KidsItems')->get();
        return view('asian_product.kids', compact('product'));
    }
    public function asianPerfume(){
        $product = asianproducts::where('Category','Perfumes')->get();
        return view('asian_product.perfume', compact('product'));
    }
    public function asianRings(){
        $product = asianproducts::where('Category','Rings')->get();
        return view('asian_product.rings', compact('product'));
    }
    public function asianTeddy(){
        $product = asianproducts::where('Category','TeddyBears')->get();
        return view('asian_product.teddy', compact('product'));
    }
    public function asianUrgent(){
        $product = asianproducts::where('Category','Urgent Deliveries')->get();
        return view('asian_product.urgent', compact('product'));
    }
    public function asianWatch(){
        $product = asianproducts::where('Category','Watches')->get();
        return view('asian_product.watch', compact('product'));
    }
    public function testPayment(Request $request){
            dd($request->product_image);
         
    }
}
