<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function openHomePage(){
        $products = Product::all();
        //return view('site.index',compact('products'));
        //return view('site.index',['products'=>$products]);
        return view('site.index')->with('products',$products);
    }

    public function openProductDetails()
    {
            return view('site.product-details');
    }
    public function openCartPage()
    {
        return view('site.cart');
    }
    public function openCheckoutPage()
    {
        return view('site.checkout');
    }
}
