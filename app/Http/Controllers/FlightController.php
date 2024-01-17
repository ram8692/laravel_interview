<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index(){

        $students  = Student::where('name','anmol')->get(); //to get filter data from the database

       // $students  = Student::get(); //to get all students data from the database
        return view("student.index",compact("students")); //passing the data to the view
    }

    public function getSpecificUser(){
        //$students  = Student::find($id); //to get specific data from the database  according to id
        //$students  = Student::first(); //to get first data from the database
        //$students  = Student::where('name','amol')->first();  //to get first data from the database according to name



        return view("student.index",compact("students"));
    }
    
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

    public function delete($id){
       // $student = Student::find($id);
        //$student->delete();

       // $student = Student::find(1)->delete(); to delete perticular data

       $student = Student::destroy($id,$id2); //to delete multiple data or single data



    }
}
