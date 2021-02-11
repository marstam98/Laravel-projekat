<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profesor;
use App\Models\Student;
use App\Models\Student_Course;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function create(Request $request){
        $student= new Student();
        $student->name=$request->name;
        $student->surname=$request->surname;
        $student->years=$request->age;
        $student->save();
        $student_curse = new Student_Course();
        $student_curse->user_id=$student->id;
        $student_curse->course_id=$request->id;
        $student_curse->save();
        return redirect('/'.$request->id);
    }
    public function getAll(){
        return response()->json(Student::all(),200);
    }
    public function getById($id){
        $student=Student::find($id);
        if(is_null($student)){
            return response()->json(["message"=>"Record not found!"],404);
        }
        return response()->json($student,200);
    }
    public function saveStudent(Request $request){
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name'=>'required|min:3',
            'surname'=>'required|min:3',
            'years'=>'required'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Invalid data! All fields are required, name and surname are minimum 3 characters long"],400);
        }
        $student= Student::create($request->all());
        return response()->json($student, 201);
    }
    public function delete(Request $request, $id){
        $student=Student::find($id);
        if(is_null($student)){
            return response()->json(["message"=>"Record not found!"],404);
        }
        $student->delete();
        return response()->json(null,204);
    }
}
