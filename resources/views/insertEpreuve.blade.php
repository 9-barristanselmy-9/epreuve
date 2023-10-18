@extends('template')
@section('title')
    Epreuve
@endsection
@section('contenu')

<div class="container-epreuve">

    <h3 class= "Heading" >Ajouter Epreuve</h3>

    <form method="post" action="/insertepreuve">
        @csrf
        <div class="form-group">
        <input type="text" name="numero" placeholder="numero" >
        </div>
        <div class="form-group">
        <input type="date" name="Date"  placeholder="Date	">
        </div>
        <div class="form-group">
        <input type="text" name="coef"placeholder="coefficient" >
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>
@endsection


