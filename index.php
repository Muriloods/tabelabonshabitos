<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tabela de bons hábitos</title>
	
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet"/>
	

	<!-- jQuery to use with DataTable -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- DataTable CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

</head>
<style>
	.margin
	{
		margin-left: 5px;
	}
</style>

<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-lg-12 text-center">
				<h2 class="text-muted blockquote ">Adicione bons hábitos diários</h2>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-1.5 margin">
				<form action="backend/actions/cadastrar-habitos.php" method="post">
                    <label class="text-muted blockquote text-center" for="">Não fumar</label>
                    <select class="form-control " name="nao_fumar" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Não beber</label>
                   <select class="form-control " name="nao_beber" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Acordar cedo</label>
                   <select class="form-control" name="acordar_cedo" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Musculação</label>
                   <select class="form-control " name="musculacao" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Ler</label>
                   <select class="form-control " name="ler" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Estudar</label>
                   <select class="form-control " name="estudar" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Correr</label>
                   <select class="form-control " name="correr" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Beber agua</label>
                   <select class="form-control" name="beber_agua" required>
                        <option value="">- Selecione -</option>
						<option value="sim" >Sim</option>
						<option value="nao" >Não</option>
			        </select>
				</div>
		</div>
		<br>
		<div class="col-lg-12 text-center">
			<input class="btn btn-primary" type="submit" value="Enviar" name="enviar">
			</form>
		</div>
		<br>
		<h2 class="text-muted blockquote text-center">Sua tabela diária de bons hábitos</h2>
		<?php
			require_once "views/data-table.php";
		?>
	</div>
</body>

</html>
<script>
	$(document).ready( function ()
	{
		$('#table_id').dataTable();
	})
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


