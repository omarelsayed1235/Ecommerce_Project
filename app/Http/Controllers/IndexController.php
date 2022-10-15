<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function test(){
        $trendings=Product::inRandomOrder()->take(8)->get();
        $products=Product::inRandomOrder()->take(8)->get();
        return view('index', compact('products','trendings'));
    }
    public function men(){
        $trendings=Product::inRandomOrder()->take(8)->get();
        $category_id=Category::where('type','men')->first()->id;
        $products=Product::where('category_id',$category_id)->get()->take(8);
        return view('index', compact('products','trendings'));
    }
    public function women(){
        $trendings=Product::inRandomOrder()->take(8)->get();
        $category_id=Category::where('type','women')->first()->id;
        $products=Product::where('category_id',$category_id)->get()->take(8);
        return view('index', compact('products','trendings'));
    }
    public function kids(){
        $trendings=Product::inRandomOrder()->take(8)->get();
        $category_id=Category::where('type','kids')->first()->id;
        $products=Product::where('category_id',$category_id)->get()->take(8);
        return view('index', compact('products','trendings'));
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
    public function checkout(Request $request){
        $order=Order::find($request->id);
        $order->type='complete';
        $order->save();
        return redirect()->route('test');
    }
}
