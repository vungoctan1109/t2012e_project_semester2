<?php

namespace App\Http\Controllers\AdminController;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand as Brand_Model;
use App\Models\Mobile as Mobile_Model;
use Illuminate\Support\Facades\Validator;
use App\Models\Category as Category_Model;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category_Model::all();
        $brands = Brand_Model::all();
        return view('admin.page.mobile.create_mobile')->with('categories', $categories)->with('brands', $brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'categoryID' => 'required',
            'brandID' => 'required',           
            'quantity' => 'required',
            'status' => 'required',
            'saleOff' => 'required',
            'price' => 'required',
            'thumbnail' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'color' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'pin' => 'required',
            'camera' => 'required',
            'screenSize' => 'required',                       
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->toArray(), 'message' => 'Data not valid!']);
        } else {
            $mobiles = new Mobile_Model();
            $mobiles->name = $request->get('name');
            $mobiles->categoryID = $request->get('categoryID');
            $mobiles->brandID = $request->get('brandID');
            $mobiles->quantity = $request->get('quantity');
            $mobiles->status = $request->get('status');
            $mobiles->saleOff = $request->get('saleOff');
            $mobiles->price = $request->get('price');
            $mobiles->thumbnail = $request->get('thumbnail');
            $mobiles->color = $request->get('color');
            $mobiles->ram = $request->get('ram');
            $mobiles->pin = $request->get('pin');
            $mobiles->camera = $request->get('camera');
            $mobiles->screenSize = $request->get('screenSize');            
            $mobiles->memory = $request->get('memory');
            $mobiles->detail = $request->get('detail');
            $mobiles->description = $request->get('description');
            $mobiles->created_at = Carbon::now();
            $mobiles->updated_at = Carbon::now();
            if ($mobiles->save()) {
                return response()->json(['status' => 200, 'message' => 'Data have been successfully insert']);
            }
            return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
        }
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
