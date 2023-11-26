@extends('template')
@section('title')
    update-matiere
@endsection
@section('contenu')

<div class="container-epreuve">

    <h3 class= "Heading" >Modifier Matiere</h3>

    <form method="post" action={{route('matiere.update' ,['matiere'=>$matieres])}}>
        @csrf
        @method('PUT')
        <input type="text" style="display:none" value="{{$matieres->id}}" />
        <div class="form-group">
        <input type="text" name="code" placeholder="code" value="{{$matieres->Code}}">
        </div>
        <div class="form-group">
        <input type="text" name="libelle"  placeholder="Libelle" value="{{$matieres->Libelle}}">
        </div>
        <div class="form-group">
        <input type="text" name="coef"placeholder="Coef" value="{{$matieres->Coef}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
    </div>


    
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
   @endsection

