<?php

	class Habitos
	{

		/**
		 * Insere um habito na base de dados
		 *
		 * @param bool $nao_fumar sim ou nao
		 * @param bool $nao_beber sim ou nao
		 * @param bool $acordar_cedo sim ou nao
		 * @param bool $musculacao sim ou nao
		 * @param bool $ler sim ou nao
		 * @param bool $estudar sim ou nao
		 * @param bool $correr sim ou nao
		 * @param bool $beber_agua sim ou nao
         * 
		 * @return bool sucesso ou falha no cadatro
		*/
		public static function cadastrar_habito($nao_fumar, $nao_beber, $acordar_cedo, $musculacao, $ler, $estudar, $correr, $beber_agua)
		{
			$sql = "INSERT INTO bons_habitos (naoFumar, naoBeber, acordarCedo, musculacao, ler, estudar, correr, beberAgua) VALUES (:naoFumar, :naoBeber, :acordarCedo, :musculacao, :ler, :estudar, :correr, :beberAgua)";
			$sql = Connection::getConn()->prepare($sql);
			$sql->bindValue(':naoFumar', $nao_fumar);
			$sql->bindValue(':naoBeber', $nao_beber);
			$sql->bindValue(':acordarCedo', $acordar_cedo);
			$sql->bindValue(':musculacao', $musculacao);
            $sql->bindValue(':ler', $ler);
			$sql->bindValue(':estudar', $estudar);
			$sql->bindValue(':correr', $correr);
			$sql->bindValue(':beberAgua', $beber_agua);
            
			return Connection::bdExecuta($sql) ? true : false;
		}

		/**
		 * Remove um habito diario na base de dados
		 *
		 * @param string $id_habito Identificador do habito diario 
		 * 
		 * @return bool sucesso ou falha no cadatro
		*/
		public static function remover_habito($id_habito)
		{
			$sql = "DELETE FROM bons_habitos WHERE idHabito = :idHabito";
			$sql = Connection::getConn()->prepare($sql);
			$sql->bindValue(':idHabito', $id_habito);
	
			return Connection::bdExecuta($sql) ? true : false;
		}

		/**
		 * Lista todos os habitos diarios cadastrados
		 * 
		 * @return array habitos da listagem
		*/
		public static function listar_habitos()
		{
			$sql = "SELECT * FROM bons_habitos ";
			$sql = Connection::getConn()->prepare($sql);
			$resultado = Connection::bdConsulta($sql);
			return !empty($resultado) ? $resultado : array();
		}

        /**
		 * Edita um habito diario na base de dados
		 * 
		 * @return bool sucesso ao editar ou falha
		*/
		public static function editar_habito(
			$idHabito, $nao_fumar, $nao_beber, $acordar_cedo, $musculacao,
			$ler, $estudar, $correr,
			$beber_agua
		)
		{
			$sql = "
				UPDATE
					bons_habitos
				SET
					naoFumar    =  :naoFumar,
					naoBeber    =  :naoBeber,
					acordarCedo =  :acordarCedo,
					musculacao  =  :musculacao,
					ler         =  :ler,
					estudar     =  :estudar,
					correr      =  :correr,
					beberAgua   =  :beberAgua
				WHERE
					idHabito    =  :idHabito

			";
			$sql = Connection::getConn()->prepare($sql);
			$sql->bindValue(':idHabito',    $idHabito);
			$sql->bindValue(':naoFumar',	$nao_fumar);
			$sql->bindValue(':naoBeber',	$nao_beber);
			$sql->bindValue(':acordarCedo',	$acordar_cedo);
			$sql->bindValue(':musculacao',	$musculacao);
			$sql->bindValue(':ler',			$ler);
			$sql->bindValue(':estudar', 	$estudar);
			$sql->bindValue(':correr',		$correr);
			$sql->bindValue(':beberAgua',	$beber_agua);


			return Connection::bdExecuta($sql) ? true : false;
		}
		/**
		 * Converete data para o modelo brasileira
		 *
		 * @param string $data data nor formato yy/mm/dd
		 * 
		 * @return string data no formato dd/mm/yy
		*/
		public static function data($data){
			return date("d/m/Y", strtotime($data));
		}
    }