<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProds; 

class CategoryProdsController extends Controller

{
    
    //METODO INDEX
    public function index(Request $request){
        
        $categoryProds = CategoryProds::get();
        
        return ['CategoryProds'=>$categoryProds];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $categoryProds = CategoryProds::select('names')->get();
        }else{
            $categoryProds = CategoryProds::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['CategoryProds'=>$categoryProds];
    }
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
    //METODO DELETE
    public function delete(Request $request){

        $categoryProds= CategoryProds::findOrFail($request->id);
        
        $categoryProds->delete();
      
    }
    


}
