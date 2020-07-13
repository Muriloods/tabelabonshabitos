<?php
	require_once "backend/models/Habitos.php";
	require_once "backend/classes/Connection.php";
	$habitos = Habitos::listar_habitos();
	
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	th
	{
		width: 10%;
	}
	.sim
	{
		color: green;
	}
	.nao
	{
		color: red;
	}
	.select
	{
		/* aqui você define o tamanho da fonte */
		font-size: 40px;
			
			/*
			se constar somente FontAwesome em font-family aparece o ícone porém o texto
			"informe seu e-mail" fica com a fonte padrão do navegador
			font-family: "FontAwesome";
			*/
 
			/* fazendo dessa forma aparece o ícone e o texto fica formatado */
		 font-family: "FontAwesome", Open Sans, Arial;
 
			/* aqui você define a cor */
		   cursor: pointer;
	}
	.none 
	{
		display: none;
	}
	
</style>

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
			<?php
				foreach($habitos as $habito)
				{
					$id             = $habito['idHabito'];
					$data           = Habitos::data($habito['data']);
					$naoFumar       = $habito['naoFumar']        == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$naoBeber       = $habito['naoBeber']        == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			<option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																		   '<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			<option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$acordarCedo    = $habito['acordarCedo']     == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$musculacao     = $habito['musculacao']      == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$ler            = $habito['ler']             == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$estudar        = $habito['estudar']         == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';

					$correr         = $habito['correr']          == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';
				

					$beberAgua      = $habito['beberAgua']       == 'sim' ? '<option id="option" class="select sim" selected value="sim">&#xf00c;</option>
																			 <option id="option1" class="select nao" value="nao">&#xf00d;</option>' : 
																			'<option id="option1" class="select sim" value="sim">&#xf00c;</option>
																			 <option id="option" class="select nao" selected value="nao">&#xf00d;</option>';
					
					$content = '
					<tr>
						<form action="backend/actions/editar-habitos.php" method="post">
							<td>'. $data .'</td>
							<td>
								<select id="select" name="nao_fumar" disabled data-id="'. $id .'" class="select '.$habito['naoFumar'].'" name="" id="">
									'. $naoFumar  .'  
								</select>
							</td>
							<td>
								<select id="select" name="nao_beber" disabled data-id="'. $id .'" class="select '.$habito['naoBeber'].'" name="" id="">
									'. $naoBeber  .'  
								</select>
							</td>
							<td>
								<select id="select" name="acordar_cedo" disabled data-id="'. $id .'" class="select '.$habito['acordarCedo'].'" name="" id="">
									'. $acordarCedo  .'  
								</select>
							</td>
							<td>
								<select id="select" name="musculacao" disabled data-id="'. $id .'" class="select '.$habito['musculacao'].'" name="" id="">
									'. $musculacao  .'  
								</select>
							</td>
							<td>
								<select id="select" name="ler" disabled data-id="'. $id .'" class="select '.$habito['ler'].'" name="" id="">
									'. $ler  .'  
								</select>
							</td>
							
							<td>
								<select id="select" name="estudar" disabled data-id="'. $id .'" class="select '.$habito['estudar'].'" name="" id="">
									'. $estudar  .'  
								</select>
							</td>
							<td>
								<select id="select" name="correr" disabled data-id="'. $id .'" class="select '.$habito['correr'].'" name="" id="">
									'. $correr  .'  
								</select>
							</td>
							<td>
								<select id="select" name="beber_agua" disabled data-id="'. $id .'" class="select '.$habito['beberAgua'].'" name="" id="">
									'. $beberAgua  .'  
								</select>
								<input type="hidden" name="id_habito" value="'. $id .'">
							</td>
							
							<td class="none'.$id.'">
								<a class="btn" data-id="'. $id .'"><i class="far fa-edit" ></i></a>
								<a class="btn" id="excluir" data-id="'. $id .'"><i class="fas fa-trash"></i></a>
							</td>
							<td id="bt'.$id.'" style="display: none">
								<input data-id="'.$id.'"type="submit" class="btn btn-primary" id="enviar" value="EDITAR" name="enviar">
							</td>
						</form>
					</tr>
					
					
					';
					echo $content;
				}
				?>
		</tbody>
	</table>
	<script>
		var campos = document.querySelectorAll('#select');
		$(document).on("click", ".btn", function () {
			var id = $(this).attr('data-id');
			var none =  '.none'+ id;
			var botao = '#bt'+ id;
			$(none).css("display", "none");
			$(botao).css("display", "flex");
			
			for(let i=0; i<campos.length; i++)
			{
				var idcampos = [];
				idcampos[i] = $(campos[i]).attr('data-id');
				if(idcampos[i] == id)
				{
					$(campos[i]).attr('disabled', false);
				}
			}
		});
	
		for(let i=0; i<campos.length; i++)
		{
			$(campos[i]).change(function(event){
				var classe = event.currentTarget.value;
				if(classe == 'sim')
				{
					$(campos[i]).attr('class', 'select sim');
				}
				else
				{
					$(campos[i]).attr('class', 'select nao');
				}
			 console.log(classe);
			})
		}
		$(document).on("click", "#excluir", function () {
			confirm('Deseja mesmo excluir?');
			var id = $(this).attr('data-id');
			window.location.href = "backend/actions/excluir-habito.php?id="+ id;

		});

	</script>

	<?php





