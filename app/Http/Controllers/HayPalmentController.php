<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\HayPalment;

class HayPalmentController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $hayPalment = HayPalment::get();
        
        return ['HayPalment'=>$hayPalment];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $hayPalment = HayPalment::select('names')->get();
        }else{
            $hayPalment = HayPalment::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['HayPalment'=>$hayPalment];
    }
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
    //METODO DELETE
    public function delete(Request $request){

        $hayPalment= HayPalment::findOrFail($request->id);
        
        $hayPalment->delete();
      
    }
    

}
