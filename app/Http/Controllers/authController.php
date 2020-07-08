<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginpost(Request $request){
       $post = $request->all();
       $userData = array(
            'name' => $post['username'],
            'password' => $post['password']
       );
       if (Auth::attempt($userData) && Auth::user()->role == 0) {
         return redirect('admin');
       }
       if (Auth::attempt($userData) && Auth::user()->role == 1) {
         return redirect('admin/upload');
       }
       else{
           return back()->with('error','wrong username and password ');
    }

}
}
