<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profesor;
use App\Models\Student;
use App\Models\Student_Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function all(){
        $courses= Course::all();
        return view('courses', [
            'courses'=>$courses
        ]);

    }
    public function view($id){
        $course= Course::findOrFail($id);
        $users=[];
        $profs=[];
        $students= Student::all();
        $members = Student_Course::all();
        $profesors=Profesor::all();
        foreach ($members as $member){
            if($member->course_id==$id){
                foreach ($students as $student){
                    if($student->id==$member->user_id){
                        $users[count($users)]=$student;
                    }
                }
            }
        }
        foreach ($profesors as $profesor){
            if($profesor->course_id==$id){
                $profs[count($profs)]=$profesor;
            }
        }
        $course->students=$users;
        $course->profesors=$profs;
        return view('course',['course'=>$course]);

    }
    public function getAll(){

        return response()->json(Course::all(),200);
    }
    public function getById($id){
        $course=Student::find($id);
        if(is_null($course)){
            return response()->json(["message"=>"Record not found!"],404);
        }
        return response()->json($course,200);
    }
}
