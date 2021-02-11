<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProfesorController extends Controller
{
    public function create(Request $request){
        $professor= new Profesor();
        $professor->name=$request->name;
        $professor->surname=$request->surname;
        $professor->level=$request->level;
        $professor->course_id=$request->id;
        $professor->save();
        return redirect('/'.$request->id);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3',
            'surname'=>'required|min:3',
            'level'=>'required',
            'course_id'=>'required'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Invalid data! All fields are required, name and surname are minimum 3 characters long"],400);
        }
        $professor= Profesor::create($request->all());
        return response()->json($professor, 201);
    }
    public function delete(Request $request, $id){
        $professor=Profesor::find($id);
        if(is_null($professor)){
            return response()->json(["message"=>"Record not found!"],404);
        }
        $professor->delete();
        return response()->json(null,204);
    }
}
