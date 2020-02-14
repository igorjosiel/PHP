<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Concatenacao</title>

	</head>

	<body>
		
		<?php

			$nome = 'Igor';
			$cor = 'azul';
			$idade = 23;
			$atividade_preferida = ' jogar videogame';

			//operador .
			echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

			echo '<br>';

			//aspas duplas
			echo "Olá $nome , vi que sua cor preferida é $cor , estou vendo também que você possui $idade  anos e que gosta de $atividade_preferida";

		?>

	</body>

</html>