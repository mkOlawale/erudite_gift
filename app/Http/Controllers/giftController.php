<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class giftController extends Controller
{
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
    public function canadaGift(){
        return view('canada_gift');
    }
    public function canadaGift(){
        return view('canada_gift');
    }
}
