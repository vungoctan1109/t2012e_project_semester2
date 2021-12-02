<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail as OrderDetail_model;
use App\Models\Order as Order_model;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order_details = OrderDetail_Model::query()
            ->select('*')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);
        if ($request->ajax()) {
            return view('admin.page.order-detail.render_table', ['order_details' => $order_details])->render();
        }
        return view('admin.page.order-detail.table_data', ['order_details' => $order_details]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $order_details = OrderDetail_Model::query()
                ->select('*')
                ->sortBy($request)
                ->name($request)
                ->Pagination($request);
            return view('admin.page.order-detail.render_table')->with('order_details', $order_details)->render();
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
