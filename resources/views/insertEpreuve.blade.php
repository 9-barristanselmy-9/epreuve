@extends('template')
@section('title')
    Epreuve
@endsection
@section('contenu')

<div class="container-epreuve">

    <h3 class= "Heading" >Ajouter Epreuve</h3>

    <form method="post" action={{url('insertEpreuve')}}>
        @csrf
        <div class="form-group">
        <input type="text" name="numero" placeholder="numero" >
        </div>
        <div class="form-group">
        <input type="date" name="Date"  placeholder="Date	">
        </div>
        <div class="form-group">
        <input type="text" name="Lieu"placeholder="Lieu" >
        </div>
        <div class="form-group">
            <input type="text" name="matiere_id"placeholder="matiere_id" >
            </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>


    
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
   @endsection

