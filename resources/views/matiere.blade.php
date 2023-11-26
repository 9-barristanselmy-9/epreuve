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
        <th>Matiere_id</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($matieres as $matiere)
        <tr>
            <td>{{$matiere->id}}</td>
            <td>{{$matiere->Code}}</td>
            <td>{{$matiere->Libelle}}</td>
            <td>{{$matiere->Coef}}</td>
            <td>{{$matiere->matiere_id}}</td>
            <td>
                <a class="btn btn-info" href="/matiere/{{$matiere->id}}/edit">Edit</a>
                <form  method="post"  action="{{route('matiere.destroy',['matiere'=>$matiere])}}"class="deleteMatiere">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Supprimer" />
                </form>
            </td>
        @endforeach
        
        </tr>
    </tbody>
</table>
@endsection
