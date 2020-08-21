<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Hash;
class curlController extends Controller
{
    public function getCURL()
    {
//         $response = Curl::to('https://cornerbytes.com/api/public/api/getlocation');
//         $response = file_get_contents('https://cornerbytes.com/api/public/api/getlocation');
// dd($response);

//         dd($response);
        $response = Curl::to('ws.qvic.in/api/signup')

                ->withData(['company_id'=>'1','name'=>'sonu2','email'=>'sonu2@gmail.com','password'=>'1234','device_token'=>'test','device_type'=>2,'image'=>'','mobile'=>'8699636718'])

                ->post();
                dd($response);

 
    }
}
