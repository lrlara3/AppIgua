<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Detail;

class DetailController extends Controller
{
    //METODO GUARDAR 

    public function store(Request $request){

        $detail= new Detail;
        $detail-> names=$request->names;
        $detail-> value=$request->value;
      
        $detail->save();
      
    }

    //METODO ACTUALIZAR

    public function update(Request $request){

        $detail= Detail::findOrFail($request->id);
        
        $detail-> names=$request->names;
        $detail-> value=$request->value;
      
        $detail->save();
      
    }
}
