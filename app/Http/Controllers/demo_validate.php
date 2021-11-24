<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product as Product_Model;
class demo_validate extends Controller
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
    public function create(Request $request, $id)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request -> ajax()) {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
            if($validator ->fails()) {
                return response()->json(['status' => 400, 'errors' => $validator -> errors() -> toArray(), 'message' => 'Data not valid!']);
            }else {
                $product = new Product_Model();
                $product -> name = $request -> get('name');
                $product -> email = $request -> get('email');
                $product -> phone = $request -> get('phone');
                if($product -> save()) {
                    return response() -> json(['status' => 201, 'message' => 'Update success']);                    
                }else{
                    return response() -> json(['status' => 500, 'message' => 'Something went wrong!']);
                };                
            }
            return response() -> json(['status' => 500, 'message' => 'Something went wrong!']);
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
