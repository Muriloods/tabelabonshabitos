<?php

	require_once "../classes/Connection.php";
    require_once "../models/Habitos.php";
    

	if(isset($_GET['id']))
	{
		Habitos::remover_habito(intval($_GET['id']));
	}

	header('Location: ../..//index.php');