<?php

	abstract class Codificacao
	{
		public static function toUTF8($t)
		{
			return (!preg_match('!!u', $t)) ? utf8_encode($t) : $t;
		}
	}