<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Result;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;




class StudentController extends Controller
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

    public function update(Request $request){

        $id = $request->id;

        //one way to update data
        // $data = [
        //     "name"=> $request->name,
        //     "email"=> $request->email
        // ];

        // Student::where('id',$id)->update($data);

        //other way to update data

        // $student = Student::find($id);
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->save();

        //other way to update or create data based on condition

        $data = [
            'id'=> $id, //added for upsert method
                "name"=> $request->name,
                "email"=> $request->email
             ];

             //Student::updateOrCreate(['id'=>$id,$data]); //it will check that id is exist  if not it will create new data if yes it will update the data

//Student::upsert($data,['id'],['phone']); //if found id then update phone field else create new data with phone field


        }

    public function getChunks()
    {
        // $students = Student::chunk(2, function ($students) {
        //     foreach ($students as $student) {
        //         echo $student;
        //     }
        //     echo "<br><br>";
        // });

        //it will fetch one data at a time and pass it to the callback function
        foreach (Student::where('id','<','10')->cursor() as $student) {
                    echo $student;
                 }

    }

    public function getResult(){
       $results =  Result::addSelect(['name'=>Student::select('name')->whereColumn('results.student_id','students.id')])->get();

       dd($results);
    }

    public function getfnf(){

        //$students = Student::findOrFail($id);  //if founded id then return the data else it will throw an exception it is working like find()
        //Student::where('id',$id)->firstOrFail(); //if founded id then return the data else it will throw an exception it is working like first()

        //Student::firstOrCreate(['name'=>'anmol'],['gender'=>'male','age'=>27]); //if found id then update the data else create new data with name anmol and gender male and age 27

        //Student::where('name','anmol')->count(); //agregate function to count the data sum max min avg count

    //   $student = Student::find(3);

     //  dd($student->result);

     //$student = Student::get();

    // dd($student[1]->result);

     //   $student = Student::with('result')->get();

     //   dd($student[1]->result);

     //one to many relationship

   //  $student = Student::find(3);
   //  dd($student->results);

    $mesc = Mechanic::with('carOwner')->get();
    dd($mesc);

    }
}
