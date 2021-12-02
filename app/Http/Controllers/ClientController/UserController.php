<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        return view('admin.page.user.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->get('email');
        $check_exist = User::where('email','=',$request->get('email'))->first();
        if($check_exist !== null){
            return response()->json(['status' => 400, 'message' => 'this email account already exist, please try again!!!']);
        }
        $user->password_hash = Hash::make($request->get('password'));
        $user->fullName = $request->get('fullName');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->avatar = $request->get('avatar');
        $user->description = $request->get('description');
        $user->role = 0;
        $user->status = 1;
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $result = $user->save();
        if($result){
            return response()->json(['status' => 200, 'message' => 'save user info success']);
        }else{
            return response()->json(['status' => 500, 'message' => 'save user info false']);
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
