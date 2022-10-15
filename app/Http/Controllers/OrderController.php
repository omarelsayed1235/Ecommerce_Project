<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cart(Request $request)
    {
        // $order = Order::where('user_id', Auth::user()->id)->where('type', 'pending')->first()->get();
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        if (Order::where('user_id', Auth::user()->id)->where('type', 'pending')->first()) {
            $order = Order::where('user_id', Auth::user()->id)->where('type', 'pending')->first();
            $order_product = OrderProduct::create(['order_id' => $order->id, 'product_id' => $product_id, 'quantity' => $request->quantity, 'price' => $product->price]);
            $order->total+=$request->quantity * $product->price;
            $order->save();
            $product->quantity-=$request->quantity;
            $product->save();
        }
        else{
            $order=Order::create(['user_id'=>$request->user_id,'total'=>($product->price * $request->quantity),'type'=>'pending']);
            $order_product = OrderProduct::create(['order_id' => $order->id, 'product_id' => $product_id, 'quantity' => $request->quantity, 'price' => $product->price]);
            $product->quantity-=$request->quantity;
            $product->save();
        }
        $order_product=OrderProduct::get();
        // return back();
        return view('mycart',compact('order','order_product'));
    }
    public function mycart(){
        $order_product=OrderProduct::get();
        $order = Order::where('user_id', Auth::user()->id)->where('type', 'pending')->first();
        return view('mycart',compact('order','order_product'));
    }

    //
}
