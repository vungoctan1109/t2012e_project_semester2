<?php

namespace App\Http\Controllers\AdminController;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $result = DB::table('categories')->paginate(5);
        if ($result-> count() > 0) {
            return view('admin.template.table_data', ['categories' => $result]);
        } else {
            $data = [
                'status' => 404,
                'message' => 'get information fails',
            ];
            return view('404_Page', $data);
        }
    }

    public function search(Request $request)
    {
        $keyword = '';
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
        }
        $result = DB::table('categories')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('admin.template.include.render_table', ['categories' => $result])->render();
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $page = $request->page;
        }
        $keyword = $request->get('keyword');
        $result = DB::table('categories')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('admin.template.include.render_table',
            [
                'page' => $page,
                'categories' => $result
            ])->render();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return response() -> json(['status' => 400, 'errors' => $validator -> errors() -> toArray(),'message' => 'Data not valid!']);
        } else {
            $category = new Category();
            $category->name = $request->get('name');
            $category->description = $request->get('description');
            $category->created_at = Carbon::now();
            $category->updated_at = Carbon::now();
            if ($category->save()) {
                return response()->json(['status' => 200, 'message' => 'Data have been successfully insert']);
            }
            return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
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
    public function edit($id)
    {
        $result = DB::table('categories')->where('id', '=', $id)->first();
        return view('admin.page.category.edit_category', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        $result = DB::table('categories')->where('id', '=', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
