<?php
include_once("C:\wamp64\www\BALOTO\db\database_utilities.php");
include("C:\wamp64\www\BALOTO\Controller\TbSorteobalotoController.php");


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

						$secuenciaBaloto .= $sorteoBaloto->compararB($cadenax,$cadenay);

	

					}

				}

			}


			echo $secuenciaBaloto;
?>

	</body>
</html>