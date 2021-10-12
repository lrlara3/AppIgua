<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Inputs;

class InputsController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $inputs = Inputs::get();
        
        return ['Inputs'=>$inputs];
        
    }
    
    //METODO LIST
     public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $inputs = Inputs::select('names')->get();
        }else{
            $inputs = Inputs::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Inputs'=>$inputs];
    }
    //METODO GUARDAR 

    public function store(Request $request){

        $inputs= new Inputs;
        $inputs-> names=$request->names;
        $inputs-> cant=$request->cant;
        $inputs-> value=$request->value;
     
        $inputs->save();
      
    }
    
     //METODO ACTUALIZAR

     public function update(Request $request){

        $inputs= Inputs::findOrFail($request->id);
        
        $inputs-> names=$request->names;
        $inputs-> cant=$request->cant;
        $inputs-> value=$request->value;
     
        $inputs->save();
      
    }
    //METODO DELETE
    public function delete(Request $request){

        $inputs= Inputs::findOrFail($request->id);
        
        $inputs->delete();
      
    }
    

}
