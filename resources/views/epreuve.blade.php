
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
    
			<div class="container">

				<h2 class= "Heading" >Ajouter Epreuve</h2>
			
				<form method="post" action="{{ url('epreuve') }}">
					@csrf
					<div class="form-group">
					<input type="text" name="numero" value="mat">
					</div>
					<div class="form-group">
					<input type="Date" name="date" value="mathematique">
					</div>
					<div class="form-group">
					<input type="text" name="lieu" value="1">
					</div>
					<button type="submit" class="btn btn-primary">Ajouter</button>
				</form>
			
    @endsection
