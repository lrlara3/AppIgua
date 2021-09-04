<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    //METODO CREATE
    
    public function store(Request $request){

        $clients= new Clients;
        $clients-> names=$request->names;
        $clients-> address=$request->address;
        $clients-> email=$request->email;
        $clients-> phone=$request->phone;

        $clients->save();
      
    }

    //METODO UPDATE
    public function update(Request $request){

        $clients= Clients::findOrFail($request->id);
        
        $clients-> names=$request->names;
        $clients-> address=$request->address;
        $clients-> email=$request->email;
        $clients-> phone=$request->phone;

        $clients->save();
      
    }
    //METODO DELETE
    public function delete(Request $request){

        $clients= Clients::findOrFail($request->id);
        
        $clients->delete();
      
    }

    //METODO SELECT
    public function index(Request $request){

        $clients = Clients::get();

        return ['Clients'=>$clients];
     
    }

      //METODO LIST
      public function getData(Request $request){

        $buscar=$request->idbuscar;

        if($buscar==''){
            $clients = Clients::select('names')->get();
        }else{

        }

    }
}
