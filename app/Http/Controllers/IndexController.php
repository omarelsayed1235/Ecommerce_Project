<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function test(){
        $products=Product::get();
        return view('index', compact('products'));
    }
    public function showuser(){
        return view('myaccount');
    }
    public function dash(){
        return view('users.index');
    }
    public function show($id){
        $product=Product::find($id);
        return view('searchresult',compact('product'));
    }
}
