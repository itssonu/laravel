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
    
     public function sahu_matwebsite_2.1.1.0_export()
    {
        $datas = DB::table('users')->whereNotNull('subscription')
            ->join('subscriptions', 'users.subscription', '=', 'subscriptions.id')
            ->select('users.*', 'subscriptions.name as sub_name', 'subscriptions.days as sub_days')
            ->get();
        // dd($data);
        return Excel::create('Report ' . date("d M,Y"), function ($excel) use ($datas) {
            $excel->sheet('mySheet', function ($sheet) use ($datas) {
                $sheet->setCellValue('A1', 'Sr.no');
                $sheet->setCellValue('B1', 'Retailer name');
                $sheet->setCellValue('C1', 'Subscription');
                $sheet->setCellValue('D1', 'Subscription Date');
                $sheet->setCellValue('E1', 'Subscription Expire on');
                // $sheet->setCellValue('F1','Start_day');
                // $sheet->setCellValue('G1','End_day');
                // $sheet->setCellValue('H1','Start_time');
                // $sheet->setCellValue('I1','End_time');
                // $sheet->setCellValue('J1','Int_start');
                // $sheet->setCellValue('K1','Int_end');
                $i = 2;
                $loop = 1;
                foreach ($datas as $key => $value) {
                    // if( @$value->exemption_type == 1){
                    //     $admin_share_format = $value->exemption_value.'%';
                    // } elseif (@$value->exemption_type == 2) {
                    //     $admin_share_format = 'Rs. '.$value->exemption_value;
                    // } else {
                    //     $admin_share_format = 0;
                    // }
                    $sheet->setCellValue('A' . $i, $key + 1);
                    $sheet->setCellValue('B' . $i, $value->name);
                    $sheet->setCellValue('C' . $i, $value->sub_name);
                    $sheet->setCellValue('D' . $i, date('Y-m-d', strtotime($value->sub_date)));
                    $sheet->setCellValue('E' . $i, date('Y-m-d', strtotime($value->sub_date . ' + ' . $value->sub_days . 'days')));
                    // $sheet->setCellValue('F'.$i, $value->start_day);
                    // $sheet->setCellValue('G'.$i, $value->end_day);
                    // $sheet->setCellValue('H'.$i, $value->start_time);
                    // $sheet->setCellValue('I'.$i, $value->end_time);
                    // $sheet->setCellValue('J'.$i, $value->int_start);
                    // $sheet->setCellValue('K'.$i, $value->int_end);
                    $i++;
                    $loop++;
                }
            });
        })->download('csv');
    }
    
    
}
