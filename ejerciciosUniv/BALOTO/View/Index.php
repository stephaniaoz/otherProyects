<?php
include_once("C:\wamp64\www\BALOTO\db\database_utilities.php");
include("C:\wamp64\www\BALOTO\Controller\TbSorteobalotoController.php");


//session_destroy ();

//echo realpath("../Controller/TbUsuarioController.php") . PHP_EOL;

/*
$result = run_query();

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);

*/



?>
<!DOCTYPE html>

<html lang="en">
<html>
	<head>
	<meta charset="UTF-8">
		<title>Pagina inicial</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
	<center>

		<?php

			for($i=0; $i<=6; $i++){

				for($j=0; $j<=6; $j++){

					echo " -".$i.",".$j;

				}

				echo "<br>";

			}


			echo "<br><br><br>";

		?>


		<img src="images/logoUnivalle.png" width="250" height="350">

		<h3 class='b_titulo'>SUBSECUENCIA</h3>

	</center>
		<br><br>
		<div class="seprarador"></div>
		<br><br>

		<?php

			$arraymaximos = array();

			$cadenax = array();
			$cadenay = array();
			$matriznumeros = array();

			$arraySorteoBaloto = array();

			$sorteoBaloto = new TbSorteobalotoController();
			$arraySorteoBaloto = $sorteoBaloto->getListaSorteoBaloto();

			//var_dump($arraySorteoBaloto);

			$numeroSalto = 0;

			//var_dump($arraySorteoBaloto[0]);
			//var_dump($arraySorteoBaloto[1]);
			/*$cadenax = $arraySorteoBaloto[0];
			$cadenay = $arraySorteoBaloto[1];

			$cadenax = array($cadenax['sorbal_a'],$cadenax['sorbal_b'],$cadenax['sorbal_c'],$cadenax['sorbal_d'],$cadenax['sorbal_e'],$cadenax['sorbal_f']);

			$cadenay = array($cadenay['sorbal_a'],$cadenay['sorbal_b'],$cadenay['sorbal_c'],$cadenay['sorbal_d'],$cadenay['sorbal_e'],$cadenay['sorbal_f']);

			echo count($arraySorteoBaloto);

			$sorteoBaloto->comparar($cadenax,$cadenay);*/

			$secuenciaBaloto = "";

			for ($i=0; $i < count($arraySorteoBaloto); $i++) {

				$tipo_celda = 1;
				
				for ($j=0; $j < count($arraySorteoBaloto); $j++) {

					if($j != $i){

						$cadenax = $arraySorteoBaloto[$i];
						$cadenay = $arraySorteoBaloto[$j];

						$cadenax = array($cadenax['sorbal_a'],$cadenax['sorbal_b'],$cadenax['sorbal_c'],$cadenax['sorbal_d'],$cadenax['sorbal_e'],$cadenax['sorbal_f']);

						$cadenay = array($cadenay['sorbal_a'],$cadenay['sorbal_b'],$cadenay['sorbal_c'],$cadenay['sorbal_d'],$cadenay['sorbal_e'],$cadenay['sorbal_f']);

						$secuenciaBaloto = $sorteoBaloto->comparar($cadenax,$cadenay);

						if ($secuenciaBaloto != "") {
							echo "<table class='t_visita' cellpadding = '5' cellspacing = '0'>";							
							echo "	<br><br>";
							echo "	
										<td class='b_visita'><label>DINAMICA - SUBSECUENCIA COMÚN MAS LARGA: ".$secuenciaBaloto."</label></td>
									<div class='seprarador'></div>
									";

							if($tipo_celda % 2 == 0){
								$estilo_celda = "tr_celda_par";
							}else{
								$estilo_celda = "tr_celda_impar";
							}

							echo "	<tbody class='b_visita'>
										<tr class='".$estilo_celda." filausuario'>
										<td><label>ID</label></td>
										<td><label>SECUENCIA 1</label></td>
										<td><label>SECUENCIA 2</label></td>
										<td><label>CAE</label></td>
										</tr>
										<tr class='".$estilo_celda." filausuario'>
											<td>".$arraySorteoBaloto[$i]['sorbal_codigo']."</label></td>				
											<td>".$cadenax[0]." - ".$cadenax[1]." - ".$cadenax[2]." - ".$cadenax[3]." - ".$cadenax[4]." - ".$cadenax[5]."</td>
											<td>".$arraySorteoBaloto[$i]['sorbal_fecha']."</td>
											<td>".$arraySorteoBaloto[$i]['sorbal_cae']."</td>
										</tr>
										<tr class='".$estilo_celda." filausuario'>
											<td>".$arraySorteoBaloto[$j]['sorbal_codigo']."</td>
											<td>".$cadenay[0]." - ".$cadenay[1]." - ".$cadenay[2]." - ".$cadenay[3]." - ".$cadenay[4]." - ".$cadenay[5]."</td>
											<td>".$arraySorteoBaloto[$j]['sorbal_fecha']."</td>
											<td>".$arraySorteoBaloto[$j]['sorbal_cae']."</td>
										</tr>
									</tbody>";

							$tipo_celda++;

							echo "</table>";
						}

				
			

					}

				}

			}

	
		?>





	</body>
</html>