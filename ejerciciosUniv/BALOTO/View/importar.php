<?php

include_once("C:\wamp64\www\BALOTO\db\database_utilities.php");

//obtenemos el archivo .csv
$tipo = $_FILES['archivo']['type'];
 
$tamanio = $_FILES['archivo']['size'];
 
$archivotmp = $_FILES['archivo']['tmp_name'];
 
//cargamos el archivo
$lineas = file($archivotmp);
 
//inicializamos variable a 0, esto nos ayudará a indicarle que no lea la primera línea
$i=0;

 
//Recorremos el bucle para leer línea por línea
foreach ($lineas as $linea_num => $linea)
{ 

    	var_dump($lineas);


   //abrimos bucle
   /*si es diferente a 0 significa que no se encuentra en la primera línea 
   (con los títulos de las columnas) y por lo tanto puede leerla*/
   if($lineas) 
   { 
       //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
       /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá 
       leyendo hasta que encuentre un ; */
       $datos = explode(";",$linea);


 //die("hola".$datos[0]);
       //Almacenamos los datos que vamos leyendo en una variable

       	$sorbal_codigo = trim($datos[0]); 
       	$sorbal_a = trim($datos[1]);
       	$sorbal_b = trim($datos[2]);
       	$sorbal_c = trim($datos[3]); 
       	$sorbal_d = trim($datos[4]);
       	$sorbal_e = trim($datos[5]);
		$sorbal_f = trim($datos[6]);
		$sorbal_cae = trim($datos[7]);
		$sorbal_nombremes = trim($datos[8]);
		$sorbal_anio = trim($datos[9]);
		$sorbal_mes = trim($datos[10]);
	    $sorbal_dia = trim($datos[11]);
	    $sorbal_fecha = trim($datos[12]);

       //guardamos en base de datos la línea leida

        $query  = " INSERT INTO tb_sorteobaloto(
				            sorbal_codigo, sorbal_a, sorbal_b, sorbal_c, sorbal_d, sorbal_e, 
				            sorbal_f, sorbal_cae, sorbal_nombremes, sorbal_anio, sorbal_mes, 
				            sorbal_dia, sorbal_fecha)
				    VALUES ($sorbal_codigo, $sorbal_a, $sorbal_b, $sorbal_c, $sorbal_d, $sorbal_e, 
				            $sorbal_f, '$sorbal_cae', '$sorbal_nombremes', '$sorbal_anio', '$sorbal_mes', 
				            '$sorbal_dia', '$sorbal_fecha');
 					";

 	//	die($query);			

        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());


       //cerramos condición
   }
 
   /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya 
   entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
   $i++;
   //cerramos bucle
}

?>