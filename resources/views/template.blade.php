
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css.map') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-reboot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-reboot.css.map') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-reboot.min.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-grid.css.map') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-grid.min.css.map')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="nav-container">
				<div class="nav-box">
					<ul class="navbar-box1">
						<li class="nav-item ">
							 <a class="nav-link"  href='{!!url('/');!!}'>Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href='{!!url('/matiere');!!}'> Matiere</a>
						</li>
						<li class="nav-item dropdown">
							<a class ="nav-link" href='{!!url('/epreuve');!!}'>Epreuve</a>
						</li>
						<li class="nav-item dropdown">
							<a class ="nav-link" href='{!!url('/insertEpreuve');!!}'>Ajouter</a>
						</li>
					</ul>
				</div>
			</nav>
			@yield('contenu')
		</div>
	</div>
</div>

    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/popper.min.js')}}"></script>
	<script src="{{asset('/js/scripts.js')}}"></script>
  </body>
</html>