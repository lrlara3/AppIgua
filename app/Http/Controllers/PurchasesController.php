<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;

class PurchasesController extends Controller
{
    //METODO GUARDAR
    
    public function store(Request $request){

        $purchases= new Purchases;
        $purchases-> sale_date=$request->sale_date;
        
        $purchases->save();
      
    }

    //METODO ACTUALIZAR
    
    public function update(Request $request){

        $purchases= Purchases::findOrFail($request->id);
        
        $purchases-> sale_date=$request->sale_date;
        
        $purchases->save();
      
    }
}
