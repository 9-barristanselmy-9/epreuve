<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class EpreuveController extends Controller
{


  public function index()
  {
    $epreuves = epreuve::all();

    return view('epreuve', compact('epreuves'));
  }




  public function create()
  {
    $matieres = Matiere::all();
    return view('insertEpreuve', compact('matieres'));
  }

  public function store(Request $request)
  {
    $validate = Validator::make(
      $request->all(),
      [
        'numero' => 'bail|required|numeric|gt:0',
        'date' => 'bail|required|date',
        'lieu' => 'bail|required|max:20',
        'matiere_id' => 'bail|required'
      ]
    );
    if ($validate->fails()) {
      return back()->withErrors($validate)->withInput();
    } else {
      Epreuve::Create($request->all())
        ->with('success', 'Epreuve ajoutée avec succès');
      return redirect('/epreuve');
    }
  }
  public function show($id)
  {
    $epreuves = Epreuve::find($id);
    return view('epreuve', compact('epreuves'));
  }

  public function edit($id)
  {
    $epreuves = Epreuve::find($id);
    $matieres = Matiere::all();
    return view('updateEpreuve', compact('epreuves'), compact('matieres'));
  }


  public function update(Request $request, $id)
  {
    $validate = Validator::make($request->all(), [
      'numero' => 'bail|required|numeric|gt:0',
      'date' => 'bail|required|date',
      'lieu' => 'bail|required|max:20',
      'matiere_id' => 'bail|required',
    ]);

    if ($validate->fails()) {
      return back()->withErrors($validate)->withInput();
    } else {
      $epreuve = Epreuve::findOrFail($id);
      $epreuve->update($request->all());
    }
    return redirect(route('epreuve.index'))->with('success', 'Epreuve modifié avec succès');
  }


  public function destroy(Epreuve $epreuve)
  {
    $epreuve->delete();
    return redirect(route('epreuve.index'))->with('success', 'Epreuve supprimé avec succès');
  }
}
