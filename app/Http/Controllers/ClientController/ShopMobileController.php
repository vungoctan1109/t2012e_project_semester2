<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Brand as Brand_Model;
use App\Models\Mobile;
use App\Models\Mobile as Mobile_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ShopMobileController extends Controller
{
    function index (Request $request) {
        $brands = Brand_Model::all();
        $mobiles = Mobile_Model::query()
            ->select('*')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);
        if ($request->ajax()) {
            return view('client.page.shop', ['mobiles' => $mobiles, 'brands'=>$brands])->render();
        }
        return view('client.page.shop', ['mobiles' => $mobiles, 'brands'=>$brands]);
    }

    public function show($id){
        $mobile = Mobile_Model::query()->select('*')->where('id', $id)->first();
        return view('client.page.detail')->with('mobile', $mobile);
    }

    //filter
    public function index2(Request $request)
    {
        $brands = Brand_Model::all();
        $mobiles = Mobile_Model::query()
            ->select('*')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        if ($request->ajax()) {
            return view('admin.page.mobile.render_table', ['mobiles' => $mobiles, 'brands'=>$brands])->render();
        }
        return view('admin.page.mobile.table_data', ['mobiles' => $mobiles, 'brands'=>$brands]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $mobiles = Mobile::query()
                ->select('*')
                ->sortBy($request)
                ->name($request)
                ->ram($request)
                ->brand($request)
                ->dateFilter($request)
                ->status($request)
                ->priceFilter($request)
                ->toPrice($request)
                ->fromPrice($request)
                ->Pagination($request);
            return view('client.page.fetch_data.pagination_shop_mobile_data')->with('mobiles', $mobiles)->render();
        }
    }
}
