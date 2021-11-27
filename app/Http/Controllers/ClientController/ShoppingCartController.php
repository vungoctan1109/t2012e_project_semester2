<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('client.page.cart')->with('cartItems', $cartItems);
    }
    public function addToCart(Request $request)
    {

        if ($request->ajax()) {
            // if($request->status == "") {
            //     return response()->json(['message' => 'Add to cart successfully!!', 'total_quantity' => $total_quantity]);
            // };
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                )
            ]);
            $total_quantity = \Cart::getTotalQuantity();
            return response()->json(['message' => 'Add to cart successfully!!', 'total_quantity' => $total_quantity]);
        }
        // session()->flash('success', 'Product is Added to Cart Successfully !');
        // return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        $quantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return response()->json(['message' => 'Add to cart successfully!!', 'quantity' => $quantity, 'total' => $total]);       
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list');
    }
}
