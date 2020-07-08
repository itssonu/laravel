<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;
use PDF;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $search = $request->filter;
        // dd($search);
        if($search!=''){
            // dd($search);
            $data = Crud::where('fname','LIKE','%'.$search.'%')->ORwhere('lname','LIKE','%'.$search.'%')->ORwhere('number','LIKE','%'.$search.'%')->get();
            return view('pages.crud.view')->with('data',$data);
        }
      
        $data = Crud::all();
        return view('pages.crud.view')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->images;
        // dd($file);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'number' => 'required|min:10|max:12',
            // 'images' => 'required|max:50048|mimes:jpeg,png,jpg,gif,svg',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png|max:4000',
        ]);

        // $images=array();
        $path = public_path('images/crud_image');
        if($files=$request->images){
        foreach($files as $file){
        // $image = $request->file('images');
        $str_result1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';     
        $code1=substr(str_shuffle($str_result1),0,6);
        $imagename = $code1.'.'.$file->extension();
        $file->move($path,$imagename);
        $images[]=$imagename;
            }
        }

        $data = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'number' => $request->number,
            'image' => implode("|",$images),
            
        );
        // dd($data);
        $crud = new Crud($data);
        $crud->save();
        return back()->with('success','data inserted succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        // dd('ggg');
        return view('pages.crud.show')->with('crud',$crud);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        return view('pages.crud.edit')->with('crud',$crud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'number' => 'required|min:10|max:13',
        ]);
        $oldimagename= $request->oldimage;
        if($request->image=''){
            $data = array(
                'fname' => $request->fname,
                'lname' => $request->lname,
                'number' => $request->number,
                'image' => $oldimagename,
                
            );
        }
        else {
            $oldimagepath = public_path('images/crud_image/').$oldimagename;
           unlink($oldimagepath);
             $path = public_path('images/crud_image');
        $image = $request->image;
        $str_result1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';     
        $code1=substr(str_shuffle($str_result1),0,6);
        $imagename = $code1.'.'.$image->extension();
        $image->move($path,$imagename);
        $data = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'number' => $request->number,
            'image' => $imagename,
            
        );
        }
       
       $crud->update($data);
        return redirect('crud')->with('success','data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud)
    {
       $crud->delete();
        return back()->with('success','data deleted succesfully');
    }

    // public function filter(request $request){
    //     $search = $request->filter;
    //     $data = crud::where('fname','LIKE','%'.$search.'%');
    //     return
    // }

    public function pdfdown($id)
    {
        $crud = crud::find($id);
        $pdf = PDF::loadView('pages.crud.pdf', compact('crud'));
        
        return $pdf->download('disney.pdf');
        // return view('pages.crud.pdf', compact('crud'));
    }
}
