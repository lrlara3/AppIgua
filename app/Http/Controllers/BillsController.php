<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Bills;

class BillsController extends Controller

{
    //METODO GUARDAR 

    public function store(Request $request){

        $bills= new Bills;
        $bills-> sale_date=$request->sale_date;
        $bills-> payment_method=$request->payment_method;
        $bills-> cant=$request->cant;
        $bills-> status=$request->status;

        $bills->save();
      
    }
    //metodo actualizar 

    public function update(Request $request){
        
        $bills= Bills::findOrFail($request->id);
        
        $bills-> sale_date=$request->sale_date;
        $bills-> payment_method=$request->payment_method;
        $bills-> cant=$request->cant;
        $bills-> status=$request->status;

        $bills->save();
      
    }
}
