@extends('template')
@section('title')
   ajoute Matiere
@endsection
@section('contenu')
<div class ="container-mateire">
    <h3 class= "Heading" >Ajouter Matiere</h3>

    <form method="post" action={{route('matiere.store')}}>
        @csrf
        <div class="form-group">
        <input type="text" name="code" placeholder="Code"  >
        </div>
        <div class="form-group">
        <input type="text" name="libelle"placeholder="Libelle" >
        </div>
        <div class="form-group">
            <input type="text" name="coef"placeholder="coefficient" >
            </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>

@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
@endsection



