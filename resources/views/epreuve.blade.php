
    @extends('template')
    @section('title')
        Epreuve
    @endsection
    @section('contenu')

	<div>
		@if(session()->has('success'))
			<div>
				{{session()->get('success')}}
			</div>
			@endif
		
	</div>
	
    <table class="table">
				<thead>
					<tr>
					<th>Numero</th>
					<th>Date</th>
					<th>Lieu</th>
					<th>Matiere_id</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($epreuves as $epreuve)
					<tr>
						<td>{{$epreuve->Numero}}</td>
						<td>{{$epreuve->Date}}</td>
						<td>{{$epreuve->Lieu}}</td>
						<td>{{$epreuve->matiere_id}}</td>
						<td>
							<a class="btn btn-info" href="/epreuve/{{$epreuve->id}}/edit">Edit</a>
					
							<form method="post" action="{{route('epreuve.destroy',['epreuve'=>$epreuve])}}" class="deleteMatiere">
								@csrf
								@method('DELETE')
							<input type="submit"  class="btn btn-danger" value="Suprrimer" />
							</form>
						</td>
					</tr>
					@endforeach
					</tr>
				</tbody>
			</table>
    
			
    @endsection
