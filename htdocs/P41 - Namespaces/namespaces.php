<?php

	require "Bibliotecas/lib1/lib1.php";
	require "Bibliotecas/lib2/lib2.php";

	use B\Cliente as C1;
	use A\Cliente as C2;

	$c = new C1();

	print_r($c);

	echo $c->__get('nome');

	$d = new C2();

	print_r($d);

	echo $d->__get('nome');

?>