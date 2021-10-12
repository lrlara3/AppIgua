<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    
    
    //METODO INDEX
    public function index(Request $request){
        
        $suppliers = Suppliers::get();
        
        return ['Suppliers'=>$suppliers];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $suppliers = Suppliers::select('names')->get();
        }else{
            $suppliers = Suppliers::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Suppliers'=>$suppliers];
    }
    //METODO GUARDAR
    
    public function store(Request $request){

        $suppliers= new Suppliers;
        $suppliers-> names=$request->names;
        $suppliers-> address=$request->address;
        $suppliers-> email=$request->email;
        $suppliers-> phone=$request->phone;

        $suppliers->save();
      
    }

    //METODO ACTUALIZAR

    public function update(Request $request){

        $suppliers= Suppliers::findOrFail($request->id);
        
        $suppliers-> names=$request->names;
        $suppliers-> address=$request->address;
        $suppliers-> email=$request->email;
        $suppliers-> phone=$request->phone;

        $suppliers->save();
      
    }
    //METODO DELETE
    public function delete(Request $request){

        $suppliers= Suppliers::findOrFail($request->id);
        
        $suppliers->delete();
      
    }


}

