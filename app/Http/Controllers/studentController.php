<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
    public function index()   
    {
        $data = Student::all();
        return view('pages.student.view')->with('data', $data);
    }
    public function addstudent()
    {
        // return view('pages.student.view');
        return view('pages.student.add');
    }
    public function addstudentpost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'name' => 'required',
            'class' => 'required',
            'roll' => 'required',
        ]);

        $image = $request->image;
        $imagename = time() . '.' . $image->extension();
        $path = public_path('/student/images');
        $image->move($path, $imagename);
        $data = array(
            'name' => $request->name,
            'class' => $request->class,
            'roll' => $request->roll,
            'image' =>  $imagename
        );
        // dd($data);
        $student = new Student($data);
        $student->save();
        return back()->with('success', 'Data Inserted Sucessfully');
    }

    public function editstudent($id)
    {
        $data = Student::where('id', $id)->first();
        // dd($data);
        return view('pages.student.edit-student')->with('data', $data);
    }
    public function updatestudent(Request $request, $id)
    {
        $imagename = $request->hidden_image;
        // dd($imagename);
        $image = $request->image;
        if ($image = '') {
            $request->validate([
                'name' => 'required',
                'class' => 'required',
                'roll' => 'required',
            ]);
        } else {
            $pathimage = public_path('student/images/') . $imagename;
            unlink($pathimage);
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
                'name' => 'required',
                'class' => 'required',
                'roll' => 'required',
            ]);
            $image = $request->image;
            $imagename = time() . '.' . $image->extension();
            $path = public_path('student/images');
            $image->move($path, $imagename);
        }
        $data = array(
            'name' => $request->name,
            'class' => $request->class,
            'roll' => $request->roll,
            'image' =>  $imagename
        );
        Student::where('id', $id)->update($data);
        return back()->with('success', 'student data updated succesfully');
    }

    public function deletestudent($id)
    {
        Student::where('id', $id)->delete();
        return back()->with('success', 'student data deleted succesfully');
    }
    public function showstudent($id)
    {
        $data =  Student::where('id', $id)->latest();
        return view('pages.student.show')->with('data', $data);
    }
}
