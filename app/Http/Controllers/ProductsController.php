<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
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
}
