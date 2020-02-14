<?php

	class Exemplo
	{
		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um método normal';

		public static function metodo1()
		{
			echo 'Eu sou um método estático';
		}

		public static function metodo2()
		{
			echo 'Eu sou um método normal';
		}
	}

	$x = new Exemplo();

	echo Exemplo::$atributo1;
	echo '<br>';

	Exemplo::metodo1();

	//$x->atributo1; Não é permitido, pois o atributo é estático

?>