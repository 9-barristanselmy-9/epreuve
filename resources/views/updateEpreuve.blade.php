@extends('template')
@section('title')
    update-epreuve
@endsection
@section('contenu')

<div class="container-epreuve">

    <h3 class= "Heading" >Modifier Epreuve</h3>

    <form method="post" action={{route('epreuve.update' ,$epreuves->id)}}>
        @csrf
        @method('PUT')
        <input type="text" style="display:none" value="{{$epreuves->id}}" />
        <div class="form-group">
        <input type="text" name="numero" placeholder="numero" value="{{$epreuves->Numero}}">
        </div>
        <div class="form-group">
        <input type="date" name="date"  placeholder="Date" value="{{$epreuves->Date}}">
        </div>
        <div class="form-group">
        <input type="text" name="lieu"placeholder="Lieu" value="{{$epreuves->Lieu}}">
        </div>
        <div class="form-group">
            <select name="matiere_id">
                @foreach($matieres as $matiere)
                    <option value="{{ $matiere->id }}">{{ $matiere->Libelle }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
    </div>


    
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
   @endsection

