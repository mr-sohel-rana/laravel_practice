<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    function show(){
        $students=Student::all();

        return response()->json($students);

    }
    function store(Request $request){

        $student=Student::create($request->all());
       return response()->json($student);

    }
    function update(Request $request,$id){
        $student=Student::find($id);
        if(!$student){
            return('not found');
        }

        $student->update([
            'name'=>$request->name,
            'dept'=>$request->dept
        ]);
         return response()->json($student);

    }

    function singleStudent($id){
        $student=Student::find($id);
        if(!$student){
            return("not found");
        }
        return response()->json(['data'=>$student]);
    }
}
