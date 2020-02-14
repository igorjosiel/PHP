<html>
	
	<head>
		
		<meta charset = "utf-8">

		<title>Funcoes Datas</title>

	</head>

	<body>

		<?php

			//Recuperação da data atual / data atual
			echo date('d/m/Y H:i') . '<br>';
			echo date('D') . '<br>';

			//
			echo '<br>';
			echo date_default_timezone_get();
			echo date_default_timezone_set('America/Sao_Paulo') . '<br>';

			echo date('d/m/Y H:i') . '<br>';

			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			//timestamp
			//01/01/1970 -- 2018-04-24 (js -> milisegundos / php -> segundos)

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo $data_final . ' - ' . $time_final;

			$diferenca_times = abs($time_final - $time_inicial);

			echo '<br>';
			echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;

			$segundos_existem_dia = 24 * 60 * 60;

			echo '<br>';
			echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

			$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

			echo '<br>';
			echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;

		?>

	</body>

</html>