<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = student::all();
        return response()->json([
            'message' => 'student List',
            'students' => $student,
        ]);
    }

    public function store(Request $request)
    {

        $student = new student;
        $student->enrollment_no = $request->enrollment_no;
        $student->name = $request->name;
        $student->save();

        return response()->json([
            'message' => 'Student Added succesfully',
        ]);
    }

    public function student_with_marks($id){

        $student = student::with('marks')->find($id);
        
        return response()->json([
            "student" => $student
        ]);
    }

    public function students_with_marks(){

        $student = student::with('marks')->get();
        
        return response()->json([
            'students' => $student
        ]);
    }
}
