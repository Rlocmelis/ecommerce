<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Auth;

class CartController extends Controller
{
  public function AddCart($id){

$product = DB::table('products')->where('id',$id)->first();

$data = array();

if ($product->discount_price == NULL) {
$data['id'] = $product->id;
$data['name'] = $product->product_name;
$data['qty'] = 1;
$data['price'] = $product->selling_price;
$data['weight'] = 1;
$data['options']['image'] = $product->image_one;
$data['options']['color'] = '';
$data['options']['size'] = '';
 Cart::add($data);
 return \Response::json(['success' => 'Product Added to your Cart']);
}else{

$data['id'] = $product->id;
$data['name'] = $product->product_name;
$data['qty'] = 1;
$data['price'] = $product->discount_price;
$data['weight'] = 1;
$data['options']['image'] = $product->image_one;
$data['options']['color'] = '';
$data['options']['size'] = '';
 Cart::add($data);
 return \Response::json(['success' => 'Product Added to your Cart']);

}

  }

  public function check(){
    $content = Cart::content();
    return response()->json($content);
  }

  public function ShowCart(){
    	$cart = Cart::content();
  	     return view('pages.cart',compact('cart'));
    }


    public function removeCart($rowId){
    	Cart::remove($rowId);
      return Redirect()->back();

    }


    public function UpdateCart(Request $request){

    	$rowId = $request->productid;
    	$qty = $request->qty;
    	Cart::update($rowId,$qty);
      return Redirect()->back();

    }

    public function Checkout(){
   if (Auth::check()) {

   	$cart = Cart::content();
     	return view('pages.checkout',compact('cart'));

   }else{
      return Redirect()->route('login');
   }

    }

    public function wishlist(){
    $userid = Auth::id();
    $product = DB::table('wishlists')
            ->join('products','wishlists.product_id','products.id')
            ->select('products.*','wishlists.user_id')
            ->where('wishlists.user_id',$userid)
            ->get();
            return view('pages.wishlist',compact('product'));

    }


}
