<?php

namespace App\Http\Controllers;

use App\Product;
use App\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $product =Product::take(9) -> get();
        return view('index',['product'=>$product]);
    }
    public function student(){
        $student = Student::take(9) -> get();
        return view('student',['student'=>$student]);
    }
    public function shop(){
        $product =Product::take(9) -> get();
        return view('shop',['product'=>$product]);
    }

    public function productDetail($id){
        $product = Product::find($id);// tra ve 1 object Product theo id
        $productGallery =Product::take(4) -> get();
        return view('product-details',['product'=>$product, 'productGallery' => $productGallery]);
    }

    public function shopping($id){
        $product = Product::find($id);
        $product -> update([
           "quantity" => $product -> quantity - 1
        ]);
        return redirect() -> to("product-details/{$product -> id}");
    }

    public function survey(){
        return view('student-survey');
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
