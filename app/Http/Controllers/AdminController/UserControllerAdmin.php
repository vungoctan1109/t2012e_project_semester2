<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query()
            ->select('*')
            ->orderBy('created_at', 'ASC')
            ->paginate(9);
        if ($request->ajax()) {
            return view('admin.page.user.render_table', ['users' => $users])->render();
        }
        return view('admin.page.user.table_data', ['users' => $users]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $users = User::query()
                ->select('*')
                ->sortBy($request)
                ->fullName($request)
                ->Pagination($request);
            return view('admin.page.user.render_table', ['users' => $users])->render();
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->get('email');
        $check_exist = User::where('email', '=', $request->get('email'))->first();
        if ($check_exist !== null) {
            return response()->json(['status' => 400, 'message' => 'this email account already exist, please try again!!!']);
        }
        $user->password = Hash::make($request->get('password'));
        $user->fullName = $request->get('fullName');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->avatar = $request->get('avatar');
        $user->description = $request->get('description');
        $user->role = $request->get('role');
        $user->status = 1;
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $result = $user->save();
        if ($result) {
            return response()->json(['status' => 200, 'message' => 'save user info success']);
        } else {
            return response()->json(['status' => 500, 'message' => 'save user info false']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_admin_id)
    {
        $result = User::find($user_admin_id);
        return view('admin.page.user.edit_user', ['user' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $check_exist = User::where('email', '=', $request->get('email'))->first();
//        if ($check_exist !== null) {
//            return response()->json(['status' => 400, 'message' => 'this email account already exist, please try again!!!']);
//        }
        $result = DB::table('users')
            ->where('id', 1)
            ->update([
                'role' => $request->get('role'),
                'fullName' => $request->get('fullName'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'avatar' => $request->get('avatar'),
                'description' => $request->get('description'),
                'updated_at' => Carbon::now()
            ]);
        if ($result) {
            return response()->json(['status' => 200, 'message' => 'update user info success']);
        } else {
            return response()->json(['status' => 500, 'message' => 'update user info false']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $user_admin_id)
    {
        if ($request->ajax()) {
            $user = User::find($user_admin_id);
            if ($user) {
                if ($user->delete()) {
                    return response()->json([
                        'status' => 200,
                        'message' => 'Data have been successfully deleted!'
                    ]);
                } else {
                    return response()->json([
                        'status' => 500,
                        'message' => 'Something went wrong!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Object not exist!'
                ]);
            }
        }
    }
}
