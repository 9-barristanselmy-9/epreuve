
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
					</tr>
				</thead>
				<tbody>
					
					@foreach ($epreuves as $epreuve)
					<tr>
						<td>{{$epreuve->Numero}}</td>
						<td>{{$epreuve->Date}}</td>
						<td>{{$epreuve->Lieu}}</td>
					@endforeach
					</tr>
				</tbody>
			</table>
    
			
    @endsection
