<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductList(){
        return view ('products.products-layout');
    }
    public function blog(){
    return view ('blog.blog-page');
    }
    public function Pricing(){
   return view('pricing.pricing-page');
    }
}
