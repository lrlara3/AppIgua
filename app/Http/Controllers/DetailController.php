<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illiminate\Support\facades\DB;
Use App\Models\Detail;

class DetailController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $detail = Detail::get();
        
        return ['Detail'=>$detail];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $detail = Detail::select('names')->get();
        }else{
            $detail = Detail::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Detail'=>$detail];
    }
    //METODO GUARDAR 

    public function store(Request $request){
        try{
            DB::begintransaction();
            $detail= new Detail;
            $detail-> names=$request->names;
            $detail-> value=$request->value;
          
            $detail->save();

        }catch(Exception $e){

        } 

    }
  

    //METODO ACTUALIZAR

    public function update(Request $request){

        $detail= Detail::findOrFail($request->id);
        
        $detail-> names=$request->names;
        $detail-> value=$request->value;
      
        $detail->save();
      
    }
    //METODO DELETE
    public function delete(Request $request){

        $detail= Detail::findOrFail($request->id);
        
        $detail->delete();
      
    }

      
}
