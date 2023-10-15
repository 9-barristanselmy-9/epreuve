@extends('template')
@section('title')
    Fournisseur
@endsection
@section('contenu')
<table class="table">
    <thead>
        <tr>
        <th>Code</th>
        <th>Libelle</th>
        <th>Coef</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($matieres as $matiere)
        <tr>
            <td>{{$matiere->Code}}</td>
            <td>{{$matiere->Libelle}}</td>
            <td>{{$matiere->Coef}}</td>
        @endforeach
        </tr>
    </tbody>
</table>
@endsection
