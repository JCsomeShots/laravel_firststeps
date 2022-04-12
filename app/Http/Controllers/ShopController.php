<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    //
    public function index (){
        //SELECT * FROM products
        $products = Product::all();
        return view('shop', ["products"=> $products]);
    }
}
