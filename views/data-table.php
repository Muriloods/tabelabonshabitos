<?php
    require_once "backend/models/Habitos.php";
    require_once "backend/classes/Connection.php";
    $habitos = Habitos::listar_habitos();
   
?>
<style>
    th
    {
        width: 10%;
    }
    i.sim
    {
        color: green;
    }
    i.nao
    {
        color: red;
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
                    
                    $data        = $habito['data'];
                    $naoFumar    = $habito['naoFumar']    == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $naoBeber    = $habito['naoBeber']    == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $acordarCedo = $habito['acordarCedo'] == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $musculacao  = $habito['musculacao']  == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $ler         = $habito['ler']         == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $estudar     = $habito['estudar']     == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $correr      = $habito['correr']      == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';
                    $beberAgua   = $habito['beberAgua']   == 0 ? '<i class="fas fa-check sim fa-2x"></i>' : '<i class="fas fa-times fa-2x nao"></i>';


                    $content = '
                                    <tr>
                                        <td>' . $data .       '</td>
                                        <td>' . $naoFumar .   '</td>
                                        <td>' . $naoBeber .   '</td>
                                        <td>' . $acordarCedo .'</td>
                                        <td>' . $musculacao . '</td>
                                        <td>' . $ler .        '</td>
                                        <td>' . $estudar .    '</td>
                                        <td>' . $correr .     '</td>
                                        <td>' . $beberAgua .   '</td>
                                        <td>
                                            <a class="btn"><i class="fas fa-trash"></i></a>
                                            <a class="btn"><i class="far fa-edit" ></i></a>
                                        </td>
                                    </tr>
                    
                    
                    ';
                    echo $content;
                }
            ?>
		</tbody>
	</table>





