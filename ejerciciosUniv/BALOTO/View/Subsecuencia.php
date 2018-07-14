<?php
include_once("C:\wamp64\www\BALOTO\db\database_utilities.php");


/**
* 
*/
class Subsecuencia
{




	//llena en ceros
	
	public function ($x, $y, $L, $n, $m){


		for($i=0; $i<$n; $i++){
			$L[$i][0] = 0; //para x
		}

		for($j=0; $j<$n; $j++){
			$L[0][$i] = 0; //para y
		}

	}


	public function main(){
		//cadenas
		$sx;
		$sy;

		//matriz de numeros
		$L[$max][$max];

		//contar caracteres de la cadena adicionandole la posicion vacia

		$in = strlen($sx) + 1;
		$im = strlen($sy) + 1;

		$L[$in][$im];

		//llama funcion ceros
		$this->ini($sx,$sy,$L,$in,$im);
		//buscar subsecuencia:
		$isol = $this->LCS($sx,$sy,$L,$in,$im);

	}


	public function LCS($x,$y,$L,$n,$m){

		for($i=1; $i<=$n; $i++){

			for($j=0; $j<=$m; $j++){

				if($x[$i-1]){

				}

			}

			echo "<bR>";

		}

	}



}


?> 