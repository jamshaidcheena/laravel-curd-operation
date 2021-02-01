<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function index()
    {
        return view('curd.index');
    }
    public function store(Request $request)
    {
        $student = new Student;
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->emailAddress = $request->emailAddress;
        $student->password = bcrypt($request->password);
        $student->password_confirmation = bcrypt($request->password_confirmation);
        $student->description = $request->description;
        $student->dateOfBirth = $request->dateOfBirth;
        $student->image = $request->image;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/picture/', $filename);
            $student->image = $filename;
        }
        else{
           return $request;
           $student->image = '';
        }
        $student->save();
        return  redirect('TableShow');
    }
    public function TableShow(Student $student)
    {
        $student = Student::all();
        return view('curd.display',['student'=>$student]);
    }
    public function update(Student $student,$id)
    {
        $student = Student::find( $id );
        return view('curd.update',['student'=>$student]);
    }
    public function edit(Request $request,Student $student,$id)
    {
        $student = Student::find( $id );
        if($student)
        {
            $student->firstName = $request->firstName;
            $student->lastName = $request->lastName;
            $student->emailAddress = $request->emailAddress;
            $student->password = bcrypt($request->password);
            $student->password_confirmation = bcrypt($request->password_confirmation);
            $student->description = $request->description;
            $student->dateOfBirth = $request->dateOfBirth;
            $student->image = $request->image;

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/picture/', $filename);
                $student->image = $filename;
            }
            $student->save();
        }
        return redirect('TableShow');
    }
    public function destroy(Student $student,$id)
    {
        $student = Student::find( $id );
        $student->delete();
        return redirect('TableShow');
    }
}
