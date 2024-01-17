<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    
    public function store(Request $request){

        //
        // $student = new Student;
        // $student->student_name = $request->student_name;
        // $student->student_email = $request->student_email;
        // $student->save();

        //by using create method we can use fillable or guard for mass assignment in the model
        // $data = [
        //     'student_name' => $request->student_name,
        //     'student_email' => $request->student_email,
        // ];
        // Student::create($data);

    }
}
