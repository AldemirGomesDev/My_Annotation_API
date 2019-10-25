<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annotation;

class AnnotationController extends Controller
{
    public function index(){
        $Annotation = Annotation::all();
        if(!$Annotation){
           return response()->json([
              'message' => 'Record not found',
           ],404);
        }
        return response()->json($Annotation);
     }

     public function show($id){

        $Annotation = Annotation::find($id);
        if(!$Annotation){
           return response()->json([
              'message' => 'Record not found',
           ],404);
        }
        return response()->json($Annotation);
     }

     public function store(Request $request){

        $Annotation = new Annotation;
        $Annotation->fill($request->all());
        $Annotation->save();
    
        return response()->json($Annotation, 201);
    }
}
