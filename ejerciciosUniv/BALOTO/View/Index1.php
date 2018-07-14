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

		

		<img src="images/logoUnivalle.png" width="250" height="350">

		<h3 class='b_titulo'>BALOTO</h3>

		<form name="fromularioLogin" method="post" action="#"> 

			<p  class="textogeneral">Usuario:</p><input type="text" name="usuario_usuario_login" value="" required>
			<br>
			<p  class="textogeneral">Contraseña:</p><input type="password" name="usuario_password" value="" required>
			<br><br>
			<input type="hidden" name = 'modulo' value="ingresoLogin">
			<input type="submit" value="Ingresar" class="submit">
		</form>

		<form action="importar.php" enctype="multipart/form-data" method="post">
		   <input id="archivo" accept=".csv" name="archivo" type="file" /> 
		   <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> 
		   <input name="enviar" type="submit" value="Importar" class="submit" />
		</form>
		<br>

		<a href="../esquema.xlsx" download="esquema">
		Esquema Descargar Archivo
		</a>
		<table class='t_visita' cellpadding = '18' cellspacing = '0'>
		<br><br>
		<?php

			$sorteoBaloto = new TbSorteobalotoController();
			$arraySorteoBaloto = $sorteoBaloto->getListaSorteoBalotoC();

			echo "	<tr class='tr_celda_par'>
						<th class='b_visita'>Listado de contactos de empleo</th>
					</tr>";

			$tipo_celda = 1;

			foreach ($arraySorteoBaloto as $posicion => $valor) {
				
				if($tipo_celda % 2 == 0){
					$estilo_celda = "tr_celda_par";
				}else{
					$estilo_celda = "tr_celda_impar";
				}

				echo "	<tbody class='b_visita'>	
							<tr class='".$estilo_celda." filausuario'>
								<td>".$valor['sorbal_a']." - ".$valor['sorbal_b']." - ".$valor['sorbal_c']." - ".$valor['sorbal_d']." - ".$valor['sorbal_e']." - ".$valor['sorbal_f']."</td>
								<td>".$valor['sorbal_fecha']."</td>
							</tr>
						</tbody>";

				$tipo_celda++;

			}

		?>
		</table>
		
	</center>
		<br><br>
		<div class="seprarador"></div>
		<br><br>

	<?php
		/*for($i=1; $i<46; $i++){
			echo $i."<br>";
		}*/

		$sorteoBaloto = new TbSorteobalotoController();
		$sorteoBaloto->porNumerosMasSalientes();

	?>


	</body>
</html>