<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{
    public function output (){

       // $tab =DB::select('SELECT * FROM matieres'); 
       $tab =DB::table('matieres')->get();
        
        return view('matiere')->with('matieres',$tab);

        
    }
    public function insert(Request $request){
            
        $code = $request->input('code');
        $libelle = $request->input('libelle');
        $coef = $request->input('coef');
        $tab = DB::insert('INSERT INTO matieres (Code,Libelle,Coef) VALUES (?,?,?)',[$code,$libelle,$coef]);
        return redirect()->route('matiere');
    }

    public function store(){
        DB:: table('matieres') ->insert([
            'Code' => 'MATH',
            'Libelle' => 'Mathematiques',
            'Coef' => 3.5
        ]);
    }
}
