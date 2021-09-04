<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Inputs;

class InputsController extends Controller
{
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
}
