<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Bills;

class BillsController extends Controller

{
    
    //METODO INDEX
    public function index(Request $request){
        
        $bills = Bills::get();
        
        return ['Bills'=>$bills];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $bills = Bills::select('names')->get();
        }else{
            $bills = Bills::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Bills'=>$bills];
    }
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
    //METODO DELETE
    public function delete(Request $request){

        $bills= Bills::findOrFail($request->id);
        
        $bills->delete();
      
    }

     

}
