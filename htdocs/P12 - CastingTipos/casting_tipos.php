<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Casting de Tipos</title>

	</head>

	<body>
		
		<?php

			//gettype() => retorna o tipo da variável

			$valor = 10;
			$valor2 = (float) $valor; //float, double ou real
			$valor3 = (string) $valor;

			echo $valor . ': ' . gettype($valor);
			echo '<br>';
			echo $valor2 . ': ' . gettype($valor2);
			echo '<br>';
			echo $valor3 . ': ' . gettype($valor3);
			echo '<br>';

			$valor4 = 15.35;
			$valor5 = (int) $valor4; //int ou integer
			$valor6 = (string) $valor4;

			echo $valor5 . ': ' . gettype($valor5);
			echo '<br>';
			echo $valor6 . ': ' . gettype($valor6);
			echo '<br>';

			$valor7 = '22.12';
			$valor8 = (integer) $valor7;
			$valor9 = (double) $valor7;
			$valor10 = (boolean) $valor7; //bool ou boolean

			echo $valor8 . ': ' . gettype($valor8);
			echo '<br>';
			echo $valor9 . ': ' . gettype($valor9);
			echo '<br>';

			$valor11 = false;
			$valor12 = (int) $valor11;
			$valor13 = (string) $valor11;

			echo $valor12 . ': ' . gettype($valor12);
			echo '<br>';
			echo $valor13 . ': ' . gettype($valor13);
			echo '<br>';

		?>

	</body>

</html>