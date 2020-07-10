<?php

	abstract class Connection
	{
		private static $conn;

		public static function getConn()
		{
			if(self::$conn == null)
			{
				self::$conn = new PDO('mysql: host=localhost; dbname=habitos;', 'root', '');
			}

			return self::$conn;
		}

		public static function bdConsulta($sql)
		{
			$resultado = array();

			$sql->execute();
	
			$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $resultado == !empty($resultado) ? $resultado : array();
		}

		public static function bdExecuta($sql)
		{
			$resultado = $sql->execute();

			if(!$resultado)
			{
				return false;
			}

			return true;
		}

	}
