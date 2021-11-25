<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        if ($result->count() > 0) {
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
