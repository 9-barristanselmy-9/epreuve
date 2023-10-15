<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


 class EpreuveController extends Controller {


            public function output (){

               // $tab = DB::select('SELECT * FROM epreuves');
                $tab =DB::table('epreuves')->get();
  
                return view('epreuve')->with('epreuves',$tab);
                
    }
    public function insert(Request $request){
                
            $numero = $request->input('numero');
            $date = $request->input('date');
            $lieu = $request->input('lieu');
            $tab = DB::insert('INSERT INTO epreuves (Numero,Date,Lieu) VALUES (?,?,?)',[$numero,$date,$lieu]);
            return redirect('epreuve');
    }
    public function store(){
        DB:: table('epreuves') ->insert([
            'Numero' => '1',
            'Date' => '2021-10-09',
            'Lieu' => '102'
        ]);
    }
}
