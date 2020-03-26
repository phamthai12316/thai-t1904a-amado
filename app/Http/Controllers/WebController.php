<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('index');
        $product =Product::take(10) -> get();
    }
    public function shop(){
        return view('shop');
    }

    public function productDetail(){
        return view('product-details');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }
    public function signin(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }
    public function admin(){
        return view('admin');
    }
    public function adminProduct(){
        return view('admin-products');
    }
    public function adminCategory(){
        return view('admin-categories');
    }
    public function adminBrand(){
        return view('admin-brands');
    }
}
