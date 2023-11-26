<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;



class MatController extends Controller
{

    public function index()
    {

        $tab = Matiere::all();

        return view('matiere')->with('matieres', $tab);
    }


    public function create()
    {
        return view('insertMatiere');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'bail|required|alpha',
            'libelle' => 'bail|required|between:5,100|alpha',
            'coef' => 'bail|required|numeric|between:1,5',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            Matiere::Create($request->all());
            return redirect('/matiere');
        }
    }

    public function edit($id)
    {
        $matieres = Matiere::findOrFail($id);
        return view('updateMatiere', compact('matieres'));
    }

    public function update(Request $request, Matiere $matiere)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'bail|required|alpha',
            'libelle' => 'bail|required|between:5,100|alpha',
            'coef' => 'bail|required|numeric|between:1,5',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $matiere->update($request->all());
            return redirect(route('matiere.index'))->with('success', 'Matiere modifié avec succès');
        }
    }

    public function destroy(Matiere $matiere)
    {

        $matiere->epreuves()->delete();
        $matiere->delete();
        return redirect(route('matiere.index'))->with('success', 'matiere supprimé avec succès');
    }
}
