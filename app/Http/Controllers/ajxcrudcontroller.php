<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class ajxcrudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = student::latest()->get();
        return view('pages.ajaxcrud.index')->with('data',$data);
       
        // return $data;
    }

    public function read(){
        $responce = student::all()->get();
        return $responce;
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

        // $image = $request->image;
        // $imagename = time() . '.' . $image->extension();
        // $path = public_path('/student/images');
        // $image->move($path, $imagename);

        $data = array(
           'name'=> $request->name,
           'class'=>$request->class,
           'roll'=>$request->roll,
        //    'image' =>$request->image,
           'image'=> "image not uploaded successfully", 
        );
        $student = new student($data);
        $student->save();
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
        $data = student::find($id);
        return $data ;
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
        $data = array(
            'name' => $request->name,
            'class' => $request->class,
            'roll' => $request->roll,
            'image' =>  "image not uploaded"
        );
        Student::where('id', $id)->update($data);
    
    return "updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = student::find($id);
        $data->delete();
    }
    
}
