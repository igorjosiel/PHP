<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Funcoes Array</title>

	</head>

	<body>

		<?php

			$array = array('teclado', 'notebook', 'mouse', 'cabo hdmi', 'gabinete');
			$retorno = is_array($array);

			if($retorno)
			{
				echo 'Sim, é um array';
			}

			else
			{
				echo 'Não, não é um array';
			}

			$array2 = [1 => 'a', 7 => 'b', 18 => 'c'];

			echo '<pre>';

				print_r($array2);

			echo '</pre>';

			$chaves_array = array_keys($array2);

			echo '<pre>';

				print_r($chaves_array);

			echo '</pre>';

			echo '<pre>';

				print_r($array);

			echo '</pre>';

			sort($array); //true ou false

			echo '<pre>';

				print_r($array);

			echo '</pre>';

			echo count($array);

			$array3 = ['osx', 'Windows'];
			$array4 = array('Linux');
			$array5 = array('solaris');

			$novo_array = array_merge($array3, $array4, $array5);

			echo '<pre>';

				print_r($novo_array);

			echo '</pre>';

			$string = '26/04/2018';

			$array_retorno = explode('/', $string);

			echo '<pre>';

				echo $string;

				print_r($array_retorno);

				echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];

			echo '</pre>';

			$array6 = ['a', 'b', 'x', 'y'];

			$string_retorno = implode(', ', $array6);

			echo $string_retorno;

		?>

	</body>

</html>