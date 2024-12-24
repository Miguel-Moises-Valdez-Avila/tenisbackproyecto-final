<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = [];
        $products['products'] = Product::all();
        return view('layouts.index')->with('products', $products); 
    }
}
