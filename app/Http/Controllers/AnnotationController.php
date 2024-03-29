<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annotation;

class AnnotationController extends Controller
{
    public function index(){
        $Annotations = Annotation::all();
        if(!$Annotations){
           return response()->json([
              'msg' => 'Record not found',
           ],404);
        }
        return response()->json([
            "annotations" => $Annotations,  
            "result" => 1, 
            "msg" => "Encontrado com Sucesso!"],200);
     }

     public function show($id){

        $Annotation = Annotation::find($id);
        if(!$Annotation){
           return response()->json([
              'msg' => 'Record not found',
           ],404);
        }
        return response()->json(["annotation" => $Annotation,  
        "result" => 1, "msg" => "Encontrado com Sucesso!"],200);
     }

     public function store(Request $request){

        $Annotation = new Annotation;
        $Annotation->fill($request->all());
        $Annotation->save();
    
        return response()->json(["annotation" => $Annotation,  
        "result" => 1, "msg" => "Anotação salva com sucesso!"],200);
        
    }

    public function update($id, Request $request){
   
      $Annotation = Annotation::find($id);
   
      if(!$Annotation) {
         return response()->json([
            'msg' => 'Record not found',
         ], 404);
      }
      $Annotation->fill($request->all());
      $Annotation->save();

      $Annotations = Annotation::all();
   
      return response()->json([
         "annotations" => $Annotations, 
         "annotation" => $Annotation, 
         "result" => 1, 
         "msg" => "Atualizado com sucesso!"],200);
   }

   public function destroy($id){
      $Annotation = Annotation::find($id);
  
      if(!$Annotation) {
        return response()->json(["result" => 1, 
           'msg' => 'Record not found',
        ], 404);
      }
      $Annotation->delete();
      
      $Annotations = Annotation::all();
  
      return response()->json([
         "annotations" => $Annotations, 
         "result" => 1, 
         "msg" => "Apagado com sucesso!"],200);
  }
    
}
