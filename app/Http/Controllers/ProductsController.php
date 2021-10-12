<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    
    //METODO INDEX
    public function index(Request $request){
        
        $products = Products::get();
        
        return ['Products'=>$products];
        
    }
    
    //METODO LIST
    public function  getData(Request $request)
    {
        $buscar=$request->idBuscar;
        
        if($buscar==''){
            $products = Products::select('names')->get();
        }else{
            $products = Products::select('names')->where('id','=',$buscar)->get();
            
        }
        
        return ['Products'=>$products];
    }
    //METODO GUARDAR
    
    public function store(Request $request){

        $products= new Products;
        $products-> names=$request->names;
        $products-> description=$request->description;
        $products-> price=$request->price;
        $products-> cant=$request->cant;
      
        $products->save();
      
    }

    //METODO ACTUALIZAR
    
    public function update(Request $request){

        $products= Products::findOrFail($request->id);
        
        $products-> names=$request->names;
        $products-> description=$request->description;
        $products-> price=$request->price;
        $products-> cant=$request->cant;
      
        $products->save();
      
    }
    //METODO DELETE
    public function delete(Request $request){

        $products= Products::findOrFail($request->id);
        
        $products->delete();
      
    }
    

}
