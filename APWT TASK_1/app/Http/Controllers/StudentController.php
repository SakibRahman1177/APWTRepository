<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
//     public function studentList(){
//         $student = array();

//         for($i=0; $i<5; $i++){
//             $student = array(
//                 "name" => "Student " . ($i+1),
//                 "id" =>"00" . ($i+1)

//             );
//             $student[] = (object)$student; 
//         }
//  //return $student;
//         return view('student.studentList')->with('student', $student);
//     }
    // public function studentEdit(Request $request){
    //     return $request->name;
    // }

    public function studentCreate(){
        return view('student.studentCreate');
    }
    // public function studentCreateSubmitted(Request $request){
    //     $validate = $request->validate([
    //         "name"=>"required|min:5|max:20",
    //         "id"=>"required",
    //         'dob'=>'required',
    //         'email'=>'email',
    //         'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
    //     ],
    //     ['name.required'=>"Please put you name here"]
    // );
    //     return $request;
    // }

}