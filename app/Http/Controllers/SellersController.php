<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sellers;

class SellersController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $sellers = Sellers::get();
        
        return ['Sellers'=>$sellers];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $sellers = Sellers::select('names')->get();
        }else{
            $sellers = Sellers::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Sellers'=>$sellers];
    }
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
    //METODO DELETE
    public function delete(Request $request){

        $sellers= Sellers::findOrFail($request->id);
        
        $sellers->delete();
      
    }
    

}
