<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Funcoes Strings</title>

	</head>

	<body>

		<?php

			$texto = 'Curso completo de PHP';

			echo $texto;

			//string to lower
			echo '<br> Função strtolower: ' . strtolower($texto);

			//string to upper
			echo '<br> Função strtoupper: ' . strtoupper($texto);

			//upper case first
			echo '<br> Função ucfirst: ' . ucfirst($texto);

			//string length
			echo '<br> Função strlen: ' . strlen($texto);

			//string replace
			echo '<br> Função str_replace: ' . str_replace('PHP', 'JavaScript', $texto);

			//sub string
			echo '<br> Função substr: ' . substr($texto, 6, 8);

		?>

	</body>

</html>