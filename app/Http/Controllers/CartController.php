<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  //
  public function add(Product $product){
    // add the product to cart

  $userID = 3;

\Cart::session($userID)->add(array(
  'id' =>$product->id,
  'name' => $product->name,
  'price' => $product->price,
  'quantity' => 1,
  'attributes' => array(),
  'associatedModel' => $product
));
 return redirect()->route('cart.index');
  }

  public function index(){
    $userID = 3;
    $cartItems = \Cart::session($userID)->getContent();
    return view('cart.index',compact('cartItems'));
  }

  public function destroy($itemId){
        $userID = 3;
       \Cart::session($userID)->remove($itemId);
        return back();
  }

  public function update($itemId){
       $userID = 3;
       \Cart::session($userID)->update($itemId,[
         'quantity' => array(
         'relative' => false,
         'value' => request('quantity')
         ),
       ]);
        return back();
  }
}
