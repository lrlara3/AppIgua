<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;

class PurchasesController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $purchases = Purchases::get();
        
        return ['Purchases'=>$purchases];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $purchases = Purchases::select('names')->get();
        }else{
            $purchases = Purchases::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Purchases'=>$purchases];
    }
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
    //METODO DELETE
    public function delete(Request $request){

        $purchases= Purchases::findOrFail($request->id);
        
        $purchases->delete();
      
    }
    

}
