<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Array Básico</title>

	</head>

	<body>

		<?php

			//sequenciais (numéricos)
			$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');

			echo '<pre>';
				
				var_dump($lista_frutas);
				
			echo '</pre>';

			echo '<hr>';

			echo '<pre>';

				print_r($lista_frutas);

			echo '</pre>';

			echo $lista_frutas[2];

			//associativos
			$lista_cores = ['a' => 'Amarelo', 'v' => 'Verde', 'z' => 'Azul', 'r' => 'Vermelho', 'p' => 'preto'];

			$lista_cores['b'] = 'Branco';

			echo '<pre>';

				var_dump($lista_cores);

			echo '</pre>';

			echo $lista_cores['v'];

		?>

	</body>

</html>