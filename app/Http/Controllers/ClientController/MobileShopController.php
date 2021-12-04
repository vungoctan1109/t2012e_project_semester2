<?php

namespace App\Http\Controllers\ClientController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand as Brand_Model;
use App\Models\Mobile as Mobile_Model;
use Illuminate\Support\Facades\Session;
use App\Models\Category as Category_Model;

class MobileShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand_Model::all();
        $mobiles = Mobile_Model::query()
            ->select('*')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);
        if ($request->ajax()) {
            return view('client.page.fetch_data.pagination_shop_mobile_data', ['mobiles' => $mobiles])->render();
        }
        $mobiles_recent_view = [];
        if (Session::has('recent_view')) {
            $mobiles_recent_view = Mobile_Model::findMany(Session::get('recent_view'));
        }
        return view('client.page.shop', ['mobiles' => $mobiles, 'brands' => $brands, 'mobiles_recent_view' => $mobiles_recent_view]);
    }
    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $mobiles = Mobile_Model::query()
                ->select('*')
                ->orderBy('created_at', 'DESC')
                ->sortBy($request)
                ->name($request)
                ->brandArr($request)
                ->priceClient($request)
                ->battery($request)
                ->screen($request)
                ->ram($request)
                ->pagination($request);
            return view('client.page.fetch_data.pagination_shop_mobile_data')->with('mobiles', $mobiles)->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($mobile = Mobile_Model::find($id)) { 
            $mobile_related = Mobile_Model::query()->select('*')->where('brandID', $mobile->brandID)->get()->take(10);       
            $arr = [];
            if (Session::has('recent_view')) {
                $arr = Session::get('recent_view');
            }
            if (!in_array($id, $arr)) {
                array_push($arr, $id);
                if (sizeof($arr) > 6) {
                    array_shift($arr);
                }
            }
            Session::put('recent_view', $arr);
            return view('client.page.detail')->with('mobile', $mobile)->with('mobile_related',$mobile_related);
        }
        return view('client.page.error.page_404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
