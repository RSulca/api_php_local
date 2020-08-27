<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ApiController extends Controller{

    public function create(Request $request){
        $students = new Student();
        $students->name = $request->input('name');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }

    public function read(){
        $students = Student::all();
        return response()->json($students);
    }

    public function readbyid($id){
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updatebyid(Request $request, $id){
        $students = Student::find($id);
        $students->name = $request->input('name');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }

    public function deletebyid($id){
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
