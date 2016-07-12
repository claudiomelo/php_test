<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 	<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
 	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test UpLexis</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/app.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="navbar" >
				<ul class="nav navbar-nav" >
					<li><a style="color:#FFFFFF; font-weight:bold;" href="#">UpLexis</a></li>
					<li><a style="color:#FFFFFF" href="{{ url('/consulta') }}">Consultar CNPJ</a></li>
					<li><a style="color:#FFFFFF" href="{{ url('/listConsulta') }}">Listar Consultas</a></li>

				</ul>			
			</div>
		</div>
	</nav>

				

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
