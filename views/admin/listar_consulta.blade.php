@extends('app')

@section('content')
<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
<?php //print_r($sintegra);?>
				<div class="panel-heading">Lista de Consultas</div>
				<div class="panel-body">

				   <table class="table table-striped table-bordered table-hover">

				   		<thead class="sintegras">
				            <th>Criado em</th>
				            <th>CNPJ</th>				            
				            <th>JSON</td>
				            <th>Deletar</td>				           
				         </thead>

				      @forelse($sintegra as $sint)

				         <tr class="sintegras">
				            <td>{{date('d/m/Y H:s:i', strtotime($sint->created_at))}}</a></td>
				            <td>{{$sint->cnpj}}</td>
				            <td style='word-wrap: break-word;' width="50%">
				           	 <textarea style='width:100%; height: 30px;'>{{$sint->resultado_json}}</textarea>
				            </td>

				            <td width="30px" align="center">				            	
             					<a href="javascript:if(confirm('Tem certeza que deseja excluir esta pesquisa?'))
             						{location='/pesquisaDel/{{$sint->id}}'};">
             						<span class="glyphicon glyphicon-remove"></span> 
             					</a>
	             			</td>
				         </tr>

				        


				       @empty

				       <tr class="alert-danger">
				          <td colspan="4"> Não há sintegras cadastrados.</td>
				       </tr>

				       @endforelse

				     </table>





<script type="text/javascript">	
	$(".table").dataTable({                              
	 "oLanguage": {
	    "sProcessing": "Aguarde enquanto os dados são carregados ...",
	    "sLengthMenu": "Mostrar _MENU_ registros por pagina",
	    "sZeroRecords": "Nenhum registro encontrado",
	    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
	    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
	    "sInfoFiltered": "",
	    "sSearch": "Procurar",
	    "oPaginate": {
	       "sFirst":    "Primeiro",
	       "sPrevious": "Anterior",
	       "sNext":     "Próximo",
	       "sLast":     "Último"
	    }
	 }                              
	});  
	
</script>
							     
				     
				     
				</div>
				</div>
			</div>
		</div>
	</div>		
   

@stop
