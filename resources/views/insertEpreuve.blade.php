@extends('template')
@section('title')
    Epreuve
@endsection
@section('contenu')

<div class="container-epreuve">

    <h3 class= "Heading" >Ajouter Epreuve</h3>

    <form method="post" action={{route('epreuve.store')}}>
        @csrf
        <div class="form-group">
        <input type="text" name="numero" placeholder="numero" >
        </div>
        <div class="form-group">
        <input type="date" name="date"  placeholder="Date">
        </div>
        <div class="form-group">
        <input type="text" name="lieu"placeholder="Lieu" >
        </div>
        <div class="form-group">
            <select name="matiere_id">
                @foreach($matieres as $matiere)
                    <option value="{{ $matiere->id }}">{{ $matiere->Libelle }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>


    
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
   @endsection

