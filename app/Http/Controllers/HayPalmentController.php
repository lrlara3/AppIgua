<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\HayPalment;

class HayPalmentController extends Controller
{
    //METODO GUARDAR 

    public function store(Request $request){

        $hayPalment= new HayPalment;
        $hayPalment-> names=$request->names;
      
        $hayPalment->save();
      
    }

    //METODO ACTUALIZAR

    public function update(Request $request){

        $hayPalment= HayPalment::findOrFail($request->id);
        
        $hayPalment-> names=$request->names;
      
        $hayPalment->save();
      
    }
}
