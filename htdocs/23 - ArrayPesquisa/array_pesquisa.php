<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Array Pesquisa</title>

	</head>

	<body>

		<?php

			//in_array() -> true ou false para a existência do que está sendo procurado
			//array_search() -> retorna o índice do valor pesquisado, caso ele exista

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			echo '<pre>';

				print_r($lista_frutas);

			echo '</pre>';

			$existe = in_array('Maçã', $lista_frutas);
			//true -> texto = 1
			//false -> texto = vazio

			if($existe)
			{
				echo '<br> Sim, o valor procurado existe no array <br>';
			}

			else
			{
				echo '<br> Não, o valor procurado não existe no array <br>';
			}

			$existe2 = array_search('Uva', $lista_frutas);

			if($existe2 != null)
			{
				echo '<br> Sim, o valor procurado existe no array <br>';
			}

			else
			{
				echo '<br> Não, o valor procurado não existe no array <br>';
			}

			$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

			echo '<pre>';

				print_r($lista_coisas);

			echo '</pre>';

			echo in_array('Uva', $lista_coisas['frutas']);

		?>

	</body>

</html>