<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Loops Prática 2</title>

	</head>

	<body>

		<?php

			$funcionarios = array(
				array('nome' => 'João', 'salario' => 2500),
				array('nome' => 'Maria', 'salario' => 3000),
				array('nome' => 'Júlia', 'salario' => 2200)
			);

			echo '<pre>';

				print_r($funcionarios);

			echo '</br>';

			foreach($funcionarios as $idx => $funcionario)
			{
				foreach($funcionario as $idx2 => $valor)
				{
					echo "$idx2 - $valor <br>";
				}

				echo '<hr>';
			}

		?>

	</body>

</html>