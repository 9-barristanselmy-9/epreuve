<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
                
            $numero = $request->input('numero');
            $date = $request->input('date');
            $lieu = $request->input('lieu');
             DB::insert('INSERT INTO epreuves (Numero,Date,Lieu) VALUES (?,?,?)',[$numero,$date,$lieu]);
            return redirect('epreuve');
    }

    public function store(){
      Epreuve::create([
        "numero" =>1001,
        "date"=>"2023-04-15",
        "lieu"=>"Tunis"]);
      
    }
}
