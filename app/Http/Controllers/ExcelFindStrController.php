<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelFindStrController extends Controller
{
    function upload(){
        return view('pages.excelstrfind.view');
    }

    function uploadpost(Request $request){
        // dd($request->all());
        $searchword = $request->search;
        $tmpfilepath = $request->excelfile;
      // Set the content type
// header('Content-type: application/csv');
// // Set the file name option to a filename of your choice.
// header('Content-Disposition: attachment; filename=myCSV.csv');
// // Set the encoding
// header("Content-Transfer-Encoding: UTF-8");
dd($tmpfilepath);
        $filepath = public_path($tmpfilepath);
        // $str = "naveen";
        $file = fopen($filepath,"r");
        $data = [];
        while(! feof($file)){
            $data[] = fgetcsv($file);
        }
        fclose($file);
        $data2 = [];
     $data = array_slice($data,0,count($data)-1);
    //  dd($data);
        foreach ($data as $key => $value) {
            
            if (preg_grep("/^$searchword/i", $value)) {
                // $data2[] = $key;
                $data2[] = $value;
             }

        }

    $f = fopen('php://output', 'a'); // Configure fopen to write to the output buffer
    foreach ($data2 as $line) {
        fputcsv($f, $line);
      }
      fclose($f);

    
    }
}
