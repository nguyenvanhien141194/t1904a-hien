<?php


namespace App\Http\Controllers;

use \Illuminate\Http\Request;


class WebController
{
    public function homefoods(){
        return view('index');
    }
    public function shop(){
        return view('shop');
    }
    public function productDetail(){
        return view('product-single');
    }
}
