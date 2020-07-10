<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastrar Anúncio</title>
	
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
                    <label class="text-muted blockquote text-center" for="">Não fumar</label>
                    <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Não beber</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Acordar cedo</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Musculação</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Ler</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Estudar</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Correr</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
				<div class="col-lg-1.5 margin">
                    <label class="text-muted blockquote text-center" for="">Beber agua</label>
                   <select class="form-control " id="select">
                        <option value="">- Selecione -</option>
						<option value="0" >Sim</option>
						<option value="1" >Não</option>
			        </select>
				</div>
		</div>
		<br>
		<div class="col-lg-12 text-center">
			<input class="btn btn-primary" type="submit" value="Enviar">
		</div>
		<br>
		<h2 class="text-muted blockquote text-center">Sua tabela diária de bons hábitos</h2>
		<table id="table_id" class="display dataTable">
			<thead>
				<tr>
					<th>Data</th>
					<th>Não fumar</th>
					<th>Não beber</th>
					<th>Acordar cedo</th>
					<th>Musculação</th>
					<th>Ler</th>
					<th>Estudar</th>
					<th>Correr</th>
					<th>Beber agua</th>
					<th>Ação</th>

				</tr>
			</thead>
			<tbody>
            <tr>
                <td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
                <td>
                    <a><i class="fas fa-trash"></i></a>
					<a><i class="fas fa-edit"></i></a>
                </td>
			</tr>
			</tbody>
		</table>
	</div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
