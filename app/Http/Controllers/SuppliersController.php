<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
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
}

