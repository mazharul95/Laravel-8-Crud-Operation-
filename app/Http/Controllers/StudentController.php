<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent()
    {
      return view('stud/add-student');
    }
    public function storeStudent(Request $request)
  {
    $name = $request->name;
    $image = $request->file('file');
    $imageName = time().'.'.$image->extension();
    $image->move(public_path('images'),$imageName);

    $student = new Student();
    $student->name = $name;
    $student->profileimage = $imageName;
    $student->save();
    return back()->with('student_added','student record has been inserted');
  }
  public function students()
  {
    $students = Student::all();
    return view('stud/all-students',compact('students'));
  }

}
