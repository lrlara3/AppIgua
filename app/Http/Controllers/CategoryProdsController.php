<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProds; 

class CategoryProdsController extends Controller

{
    //METODO GUARDAR

    public function store(Request $request){

        $categoryProds= new CategoryProds;
        $categoryProds-> names=$request->names;
        $categoryProds-> description=$request->description;
      
        $categoryProds->save();
      
    }

     //METODO ACTUALIZAR

     public function update(Request $request){

        $categoryProds= CategoryProds::findOrFail($request->id);
        
        $categoryProds-> names=$request->names;
        $categoryProds-> description=$request->description;
      
        $categoryProds->save();
      
    }
}
