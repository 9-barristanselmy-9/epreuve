<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;



class MatController extends Controller
{

    public function output (){
        
        
       // $tab =DB::select('SELECT * FROM matieres'); 
       $tab =Matiere::all();
        
        return view('matiere')->with('matieres',$tab);

        
    }


    public function show(){
        return view('insertMatiere');
    }

    //
    public function insert(Request $request){
            

    $validator = Validator::make($request->all(),['code' =>'bail|required|alpha',
    'libelle'=>'bail|required|between:5,100|alpha',
    'coef'=>'bail|required|numeric|between:1,5',
    ]);
    
    if($validator->fails()){
        return back()->withErrors($validator)->withInput();
    }else{
        Matiere::Create($request->all());
        return redirect('/matiere');
    }
    

   
    }

    
}
