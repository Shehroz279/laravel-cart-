<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // 
    public function index(){
        $cartItems=session()->get('cartItems');
        $loop=[1,5,9,7];
        return view('cart.index',compact('cartItems'));
    }
    public function add($id){
        $product=product::find($id);
        $cartItems=session()->get('cartItems');

        if(isset($cartItems[$id])){
            $cartItems[$id]['quantity']++;
        }
        else{
            $cartItems[$id]=[
                'name'=>$product->name,
                'detail'=>$product->detail,
                'description'=>$product->description,
                'brand'=>$product->brand,
                'price'=>$product->price,
                'shipping_cost'=>$product->shipping_cost,
                'image_path'=>$product->image_path,
                'quantity'=>1,
            ];
        }
        session()->put('cartItems',$cartItems);
        return redirect()->back();
    }
    public function delete($id){
        $cartItems=session()->get('cartItems');
        if(isset($cartItems[$id])){
            unset($cartItems[$id]);
            session()->put('cartItems',$cartItems);
        }
        return redirect()->back();
    }
    public function update($id,Request $request){
        $cartItems=session()->get('cartItems');
        if(isset($cartItems[$id])){
            $cartItems[$id]['quantity']=$request->quantity;
            session()->put('cartItems',$cartItems);
        }
        return redirect()->back();
    }
}
