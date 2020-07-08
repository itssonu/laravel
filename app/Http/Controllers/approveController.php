<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class approveController extends Controller
{
    public function index()
    {
        $data = DB::table('userdatas')->where('status', '0')->get();
        return view('pages/approve')->with('data', $data);
    }
    public function approveimg($id)
    {
        //    dd($id);
        DB::table('userdatas')->where('id', $id)->update(['status' => 1]);
        
        return back()->with('success','User image is Approved');
    }
}
