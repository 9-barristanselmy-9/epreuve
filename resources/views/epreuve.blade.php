
    @extends('template')
    @section('title')
        Epreuve
    @endsection
    @section('contenu')
	
    <table class="table">
				<thead>
					<tr>
					<th>Numero</th>
					<th>Date</th>
					<th>Coefficient</th>
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
					@endforeach
					</tr>
				</tbody>
			</table>
    
			
    @endsection
