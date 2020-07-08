<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Excel_testImport;
use App\Imports\ImportExcel_test2;
use App\Exports\Exportexcel_test;

class excelController extends Controller
{
    public function index()
    {  
        return view('pages/excel/view-excel');
    }
    public function postexcel(Request $request)
    {
        $this->validate($request, [
            'excel' => 'required|mimes:csv'
        ]);
        $file = $request->excel;
        Excel::import(new Excel_testImport, $file);
        Excel::import(new ImportExcel_test2, $file);
        return back()->with('success', 'excel file uplaoded to excel_test and excel_test2');
    }
    public function export()
    {
        return Excel::download(new Exportexcel_test, 'user.xlsx');
    }
}
