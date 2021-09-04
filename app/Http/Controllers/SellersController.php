<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sellers;

class SellersController extends Controller
{
    //METODO GUARDAR
    
    public function store(Request $request){

        $sellers= new Sellers;
        $sellers-> names=$request->names;
        $sellers-> area=$request->area;
        $sellers-> address=$request->address;
        $sellers-> email=$request->email;
        $sellers-> phone=$request->phone;

        $sellers->save();
      
    }

     //METODO ACTUALIZAR
    
     public function update(Request $request){

        $sellers= Sellers::findOrFail($request->id);
        
        $sellers-> names=$request->names;
        $sellers-> area=$request->area;
        $sellers-> address=$request->address;
        $sellers-> email=$request->email;
        $sellers-> phone=$request->phone;

        $sellers->save();
      
    }
}
