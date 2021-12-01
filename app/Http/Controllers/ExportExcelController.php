<?php

namespace App\Http\Controllers;

use App\Exports\CategoryExport;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
//use Maatwebsite\Excel\Excel;



class ExportExcelController extends Controller
{
    function index(){
        $category_data = DB::table('categories')->get();
        return view('admin.page.category.export_excel')->with('category_data',$category_data);
    }
    function excel(){
        return Excel::download(new CategoryExport, 'category.xlsx');
    }
}
