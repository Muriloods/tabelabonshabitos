<?php
    require_once "../classes/Connection.php";
	require_once "../models/Habitos.php";

    if(isset($_POST['enviar']))
    {
        if( isset($_POST['nao_fumar'])    && 
            isset($_POST['nao_beber'])    && 
            isset($_POST['acordar_cedo']) &&
            isset($_POST['musculacao'])   &&
            isset($_POST['ler'])          &&
            isset($_POST['estudar'])      &&
            isset($_POST['correr'])       &&
            isset($_POST['beber_agua'])
        )
        {
            $nao_fumar    = $_POST['nao_fumar'];
            $nao_beber    = $_POST['nao_beber'];
            $acordar_cedo = $_POST['acordar_cedo'];
            $musculacao   = $_POST['musculacao'];
            $ler          = $_POST['ler'];
            $estudar      = $_POST['estudar'];
            $correr       = $_POST['correr'];
            $beber_agua   = $_POST['beber_agua'];
            
            $sucesso = Habitos::cadastrar_habito($nao_fumar, $nao_beber, $acordar_cedo, 
                                    $musculacao, $ler, $estudar, $correr, 
                                    $beber_agua);
            if($sucesso){
                header('Location: ../../index.php');
            } 
        }
    }
 
           
   