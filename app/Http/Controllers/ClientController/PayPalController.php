<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    function getTotal(Request $request) {
        if($request -> ajax()) {
            $total = \Cart::getTotal();
            $vnd_to_usd = $total/22695;
            $paypal_format = round($vnd_to_usd, 2);
            return  response() -> json(['paypal_format' => $paypal_format, 'total' => $total]);
        }
    }
    function index(Request $request) {
        return view('client.page.checkout');;
    }
}
