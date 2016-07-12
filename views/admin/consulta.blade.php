@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">

					<?php if(isset($data)):?>

						<div class="container">
							<div class="row">
								<div class="alert alert-success">
									Dados Inseridos com <b>sucesso!</b>
								</div>

								<div class="alert alert-info" style='word-wrap: break-word;'>
									{{$data}}
								</div>
							</div>
						</div>		

					<?php endif;?>
				
					<form class="form-horizontal" role="form" method="POST" action="consultar">

						{!! csrf_field() !!}

						<div class="form-group" style="text-align:center">					<img src="../../imgs/uplexis.png">				
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">CNPJ:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="num_cnpj" placeholder="Informe o CNPJ">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Consultar</button>
							</div>
						</div>

					</form>
				</div>


			</div>
		</div>
	</div>
</div>
@endsection
