<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use Gloudemans\Shoppingcart\Facades\Cart;

class MainController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('mainpage', compact('items'));
    }

    public function cart()
    {
        
        return view('cartpage');
    }

    public function addToCart($ItemId){
       $item = Item::findOrFail($ItemId);

       Cart::add([
       'id' => $item->id, 
       'name' => $item->name, 
       'qty' => 1, 
       'price' => $item->price, 
       'weight' => 0, 
       'options' => [
        'image' => $item->image
        ]]);

        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    public function buyNow($ItemId){
        $item = Item::findOrFail($ItemId);
 
        Cart::add([
        'id' => $item->id, 
        'name' => $item->name, 
        'qty' => 1, 
        'price' => $item->price, 
        'weight' => 0, 
        'options' => [
         'image' => $item->image
         ]]);
 
         return redirect()->route('cart');
     }

    public function showItem(Item $item)
{   
    return view('itempage', compact('item'));
}

public function qtyIncrement($id)
{
    $item = Cart::get($id);
    $updateQty = $item->qty + 1;

    Cart::update($id, $updateQty);

    return redirect()->back();
}

public function qtyDecrement($id)
{
    $item = Cart::get($id);
    $updateQty = $item->qty - 1;
    if($updateQty > 0){
        Cart::update($id, $updateQty);
    }
    return redirect()->back();
}

public function removeProduct($id)
{
    Cart::remove($id);

    return redirect()->back();
}

}
