<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Exercicio Fixacao 1</title>

	</head>

	<body>

		<h1>Cálculo de imposto de renda</h1>

		<hr>

		<?php

			function calcularImpostoRenda($salario)
			{
				$impostoRenda = $salario;

				if($salario < 1903.98)
				{
					$impostoRenda = 0;
				}

				else if ($salario >= 1903.98 && $salario < 2826.65)
				{
					$impostoRenda *= (7.5 / 100);
				}

				else if ($salario >= 2826.65 && $salario < 3751.05)
				{
					$impostoRenda *= (15 / 100);
				}

				else if ($salario >= 3751.05 && $salario < 4664.68)
				{
					$impostoRenda *= (22.5 / 100);
				}

				else if ($salario >= 4664.68)
				{
					$impostoRenda *= (27.5 / 100);
				}

				return $impostoRenda;
			}

			echo 'O imposto de renda a ser pago é: ' . calcularImpostoRenda(6111.12);

		?>

	</body>

</html>