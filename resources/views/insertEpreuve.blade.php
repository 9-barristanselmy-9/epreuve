@extends('template')
@section('title')
    Epreuve
@endsection
@section('contenu')

<div class="container">

    <h2 class= "Heading" >Ajouter Epreuve</h2>

    <form method="post" action="{{ url('epreuve') }}">
        @csrf
        <div class="form-group">
        <input type="text" name="codemat" value="mat">
        </div>
        <div class="form-group">
        <input type="text" name="libelle" value="mathematique">
        </div>
        <div class="form-group">
        <input type="text" name="coef" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

