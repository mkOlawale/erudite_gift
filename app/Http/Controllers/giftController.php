<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
    public function logout(Request $request){
        $user = Auth::User();
       $user->logout();
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
    public function jewelry(){
        return view('Us_product.jewelry');
    }
    public function ProductsDetails($id){

        $product = product::find($id);

        return view('home.product_details', compact('product'));
    }
}
