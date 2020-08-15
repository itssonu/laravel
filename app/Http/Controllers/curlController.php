<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Hash;
class curlController extends Controller
{
    public function getCURL()
    {
        // $response = Curl::to('https://cornerbytes.com/api/public/api/getlocation')
        //                     ->get();


        // dd($response);
        $response = Curl::to('http://localhost/01/api/public/api/usersignup')

                ->withData(['name'=>'curl', 'email'=>'curl@gmail.com', 'password'=>Hash::make(1234),])

                ->post();

    dd($response);
    }
}
