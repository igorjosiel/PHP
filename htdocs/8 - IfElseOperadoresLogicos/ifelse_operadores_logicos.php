<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>If else - Operadores Lógicos</title>

	</head>

	<body>
		
		<?php

			//AND (&&)
			if(5 == 3 && 10 > 3)
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}

			//OU (||)
			if(5 == 3 || 10 > 3)
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}

			//XOR
			if(5 == 3 XOR 10 > 3)
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}

			//!
			if(!(5 == 3 XOR 10 > 3))
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}

			//v e v e f = f
			if(22 == 22 && 3 == 3 && 5 != 5)
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}

			//(v e v) = v ou f = v
			if((22 == 22 && 3 == 3) || 5 != 5)
			{
				echo 'Verdadeiro <br>';
			}

			else
			{
				echo 'Falso <br>';
			}
			
		?>

	</body>

</html>