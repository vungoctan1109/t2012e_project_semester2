<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand::all();
        $mobiles = Mobile::query()
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
                ->Pagination($request);
            return view('admin.page.mobile.render_table')->with('mobiles', $mobiles)->render();
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
        //
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
