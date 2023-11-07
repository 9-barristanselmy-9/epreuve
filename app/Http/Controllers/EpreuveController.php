<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


 class EpreuveController extends Controller {


            public function output (){
                $tab = epreuve::all();
                return view('epreuve')->with('epreuves',$tab);

               // $tab = DB::select('SELECT * FROM epreuves');
              //  $tab =DB::table('epreuves')->get();
                //return view('epreuve')->with('epreuves',$tab);

                
    }
    
    public function show(){
        return view('insertEpreuve');
    }


    public function insert(Request $request){
                $validate=Validator::make($request->all(),['numero'=>'bail|required|numeric|gt:0',
                    'date'=>'bail|required|date',
                    'lieu'=>'bail|required|max:20',
                    'matiere_id'=>'bail|required'
                    ]);
                    if($validate->fails()){
                        return back()->withErrors($validate)->withInput();
                    }else{
                      Epreuve::Create($request->all())
                      ->with('success','Epreuve ajoutée avec succès');
                      return redirect('/epreuve');
                    }
                   
    }

  }