<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $feedbacks = Feedback::query()
            ->select('*')
            ->orderBy('created_at', 'ASC')
            ->paginate(9);
        if ($request->ajax()) {
            return view('admin.page.contact.render_table', ['feedbacks' => $feedbacks])->render();
        }
        return view('admin.page.contact.table_data', ['feedbacks' => $feedbacks]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $feedbacks = Feedback::query()
                ->select('*')
                ->sortBy($request)
                ->name($request)
                ->Pagination($request);
            return view('admin.page.contact.render_table', ['feedbacks' => $feedbacks])->render();
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

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        if (Feedback::query()->whereIn('id', explode(",", $ids))->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Data have been successfully deleted!'
            ]);
        }
        return response()->json([
            'status' => 500,
            'message' => 'Something went wrong!'
        ]);
    }
}
