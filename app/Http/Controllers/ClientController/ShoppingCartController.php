<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    #LIST
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('client.page.cart')->with('cartItems', $cartItems);
    }
    #SAVE
    public function addToCart(Request $request)
    {
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
        return response()->json(['status' => 200,'message' => 'Add to cart successfully!!', 'total_quantity' => $total_quantity]);
    }
    #UPDATE
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
        return response()->json(['status' => 200, 'message' => 'Add to cart successfully!!', 'quantity' => $quantity, 'total' => $total]);
    }
    //REMOVE ITEM INTO CART
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        $quantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        if($quantity == 0)  {
            $cartItems = \Cart::getContent();
            $list_cart = view('client.page.fetch_data.list_cart')->with('cartItems', $cartItems)->render();
            return response()->json(['status' => 200, 'message' => 'Remove item successfully!!', 'quantity' => $quantity, 'total' => $total,'list_cart' => $list_cart]);
        }
        return response()->json(['status' => 200, 'message' => 'Remove item successfully!!', 'quantity' => $quantity, 'total' => $total]);
    }
    #CLEAR
    public function clearAllCart()
    {
        \Cart::clear();
        $quantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $cartItems = \Cart::getContent();
        $list_cart = view('client.page.fetch_data.list_cart')->with('cartItems', $cartItems)->render();
        return response()->json(['status' => 200, 'message' => 'Clear cart successfully!!', 'quantity' => $quantity, 'total' => $total,'list_cart' => $list_cart]);
    }
}
