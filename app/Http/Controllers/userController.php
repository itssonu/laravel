<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Userdata;
use DB;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function upload(Request $request){
        // $post = $request->all();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $image = $request->image;
        $imagename = time().'.'.$image->extension();  
        $path = public_path('/images');
        $image->move($path,$imagename);

        $username = Auth::user()->name;

        $userdata = array(
            'username' => $username,
             'image'=> $imagename,
        );
        $insert = new Userdata($userdata);
        $insert->save();



        // DB::table('userdata')->insert([
        //     'username' => $username,
        //     'image'=> $imagename,

        // ]);

        return back()->with('success','image uploaded successfully')->with('image','$imagename')  ; 
     }
}
