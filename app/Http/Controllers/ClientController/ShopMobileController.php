<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Mobile as Mobile_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ShopMobileController extends Controller
{
    function index (Request $request) {

        $mobiles = Mobile_Model::all();
        return view('client.page.shop')->with('mobiles',$mobiles);
    }

    public function show($id){
        $mobile = Mobile_Model::query()->select('*')->where('id', $id)->first();
        return view('client.page.detail')->with('mobile', $mobile);
    }
}
