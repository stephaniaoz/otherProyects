<?php
//include_once("C:\wamp64\www\BALOTO\Controller\Controller_credentials.php");
include("C:\wamp64\www\BALOTO\Model\TbSorteobaloto.php");


class TbSorteobalotoController{

	private $arraySorteoBaloto = array();


	function __construct(){

	}


	/*Debuelve arreglo asociativo arraySorteoBaloto*/
	public function getListaSorteoBaloto(){

		$tbSorteobaloto = new TbSorteobaloto();

		$result = $tbSorteobaloto->resultListaSorteoBalotos();
		
		$count = 0;

		while ($arraySorteo = pg_fetch_assoc($result)) {
			$this->arraySorteoBaloto[$count]['sorbal_codigo'] = $arraySorteo['sorbal_codigo'];
			$this->arraySorteoBaloto[$count]['sorbal_a'] = $arraySorteo['sorbal_a'];
			$this->arraySorteoBaloto[$count]['sorbal_b'] = $arraySorteo['sorbal_b'];
			$this->arraySorteoBaloto[$count]['sorbal_c'] = $arraySorteo['sorbal_c'];
			$this->arraySorteoBaloto[$count]['sorbal_d'] = $arraySorteo['sorbal_d'];
			$this->arraySorteoBaloto[$count]['sorbal_e'] = $arraySorteo['sorbal_e'];
			$this->arraySorteoBaloto[$count]['sorbal_f'] = $arraySorteo['sorbal_f'];
			$this->arraySorteoBaloto[$count]['sorbal_cae'] = $arraySorteo['sorbal_cae'];
			$this->arraySorteoBaloto[$count]['sorbal_nombremes'] = $arraySorteo['sorbal_nombremes'];
			$this->arraySorteoBaloto[$count]['sorbal_anio'] = $arraySorteo['sorbal_anio'];
			$this->arraySorteoBaloto[$count]['sorbal_mes'] = $arraySorteo['sorbal_mes'];
			$this->arraySorteoBaloto[$count]['sorbal_dia'] = $arraySorteo['sorbal_dia'];
			$this->arraySorteoBaloto[$count]['sorbal_fecha'] = $arraySorteo['sorbal_fecha'];
			$count++;
		}		

		return $this->arraySorteoBaloto;	

	}

	/*Debuelve arreglo asociativo arraySorteoBaloto*/
	public function getListaSorteoBalotoB(){

		$tbSorteobaloto = new TbSorteobaloto();

		$result = $tbSorteobaloto->resultListaSorteoBalotos();
		
		$count = 0;

		while ($arraySorteo = pg_fetch_assoc($result)) {
			$this->arraySorteoBaloto[$count]['sorbal_codigo'] = $arraySorteo['sorbal_codigo'];
			$this->arraySorteoBaloto[$count]['sorbal_a'] = $arraySorteo['sorbal_a'];
			$this->arraySorteoBaloto[$count]['sorbal_b'] = $arraySorteo['sorbal_b'];
			$this->arraySorteoBaloto[$count]['sorbal_c'] = $arraySorteo['sorbal_c'];
			$this->arraySorteoBaloto[$count]['sorbal_d'] = $arraySorteo['sorbal_d'];
			$this->arraySorteoBaloto[$count]['sorbal_e'] = $arraySorteo['sorbal_e'];
			$this->arraySorteoBaloto[$count]['sorbal_f'] = $arraySorteo['sorbal_f'];
			$this->arraySorteoBaloto[$count]['sorbal_cae'] = $arraySorteo['sorbal_cae'];
			$this->arraySorteoBaloto[$count]['sorbal_nombremes'] = $arraySorteo['sorbal_nombremes'];
			$this->arraySorteoBaloto[$count]['sorbal_anio'] = $arraySorteo['sorbal_anio'];
			$this->arraySorteoBaloto[$count]['sorbal_mes'] = $arraySorteo['sorbal_mes'];
			$this->arraySorteoBaloto[$count]['sorbal_dia'] = $arraySorteo['sorbal_dia'];
			$this->arraySorteoBaloto[$count]['sorbal_fecha'] = $arraySorteo['sorbal_fecha'];
			$count++;
		}		

		return $this->arraySorteoBaloto;	

	}

	/*Debuelve arreglo asociativo arraySorteoBaloto*/
	public function getListaSorteoBalotoC(){

		$tbSorteobaloto = new TbSorteobaloto();

		$result = $tbSorteobaloto->resultCae();
		
		$count = 0;

		while ($arraySorteo = pg_fetch_assoc($result)) {
			$this->arraySorteoBaloto[$count]['sorbal_codigo'] = $arraySorteo['sorbal_codigo'];
			$this->arraySorteoBaloto[$count]['sorbal_a'] = $arraySorteo['sorbal_a'];
			$this->arraySorteoBaloto[$count]['sorbal_b'] = $arraySorteo['sorbal_b'];
			$this->arraySorteoBaloto[$count]['sorbal_c'] = $arraySorteo['sorbal_c'];
			$this->arraySorteoBaloto[$count]['sorbal_d'] = $arraySorteo['sorbal_d'];
			$this->arraySorteoBaloto[$count]['sorbal_e'] = $arraySorteo['sorbal_e'];
			$this->arraySorteoBaloto[$count]['sorbal_f'] = $arraySorteo['sorbal_f'];
			$this->arraySorteoBaloto[$count]['sorbal_cae'] = $arraySorteo['sorbal_cae'];
			$this->arraySorteoBaloto[$count]['sorbal_nombremes'] = $arraySorteo['sorbal_nombremes'];
			$this->arraySorteoBaloto[$count]['sorbal_anio'] = $arraySorteo['sorbal_anio'];
			$this->arraySorteoBaloto[$count]['sorbal_mes'] = $arraySorteo['sorbal_mes'];
			$this->arraySorteoBaloto[$count]['sorbal_dia'] = $arraySorteo['sorbal_dia'];
			$this->arraySorteoBaloto[$count]['sorbal_fecha'] = $arraySorteo['sorbal_fecha'];
			$count++;
		}		

		return $this->arraySorteoBaloto;	

	}

	public function porNumerosMasSalientes(){ 

		$arreglo45 = array();

		$tbSorteobaloto = new TbSorteobaloto();

		$result = $tbSorteobaloto->resultListaSorteoBalotos();
		
		$count = 0;

		for($i=1; $i<46; $i++){
			$arreglo45[$i] = 0;
		}


		while ($arraySorteo = pg_fetch_assoc($result)) {
			
			for($i=1; $i<46; $i++){

				if($arraySorteo['sorbal_a'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}				

				if($arraySorteo['sorbal_b'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}

				if($arraySorteo['sorbal_c'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}

				if($arraySorteo['sorbal_d'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}

				if($arraySorteo['sorbal_e'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}

				if($arraySorteo['sorbal_f'] == $i){
					$arreglo45[$i] = $arreglo45[$i] + 1;
				}

			}

			$count++;

		}		

		echo "<br>";

		for($i=1; $i<46; $i++){
			echo "Numero ".$i." Ocurrencia: ".$arreglo45[$i]."<br>";
		}


	}



	public function comparar($cadenax, $cadenay){


		$n = count($cadenax) + 1;
		$m = count($cadenay) + 1;


		$L = array();

		for($i=0; $i<$n; $i++){
			$L[0][$i] = 0;	//para x
		}

		for($i=0; $i<$m; $i++){
			$L[$i][0] = 0;	//para y
		}


		for ($i=1; $i < $n; $i++) { 
			for ($j=1; $j < $m; $j++) { 
				if($cadenax[$i-1] == $cadenay[$j-1]){
					$L[$i][$j] = $L[$i-1][$j - 1] + 1;
				}else{

					if($L[$i-1][$j] >= $L[$i][$j-1]){
						$L[$i][$j] = $L[$i-1][$j];
					}else{
						$L[$i][$j]  = $L[$i][$j-1];
					}

				}
			}
		}
		//debuelve el ultimo valor, la solucion
		//return $L[$n - 1][$m -1];
		//echo "<br><br>ultimo solucion: ".$L[$n - 1][$m -1]."<br><br>";

		if(($L[$n - 1][$m -1]) != ""){

			//encontrar secuencia:

			$palabra = "";

			while ($n > 1 && $m > 1) {

				if($cadenax[$n-2] == $cadenay[$m-2]){

					if($palabra == ""){

						$palabra .= "".$cadenax[$n-2];
						$n--;
						$m--;

					}else{
						$palabra .= " - ".$cadenax[$n-2];
						$n--;
						$m--;
					}
					

				}else{
					if($L[$n-2][$m-1] >= $L[$n-1][$m-2]){
						$n--;
					}else{
						$m--;
					}
				}
			}

			$n = 7;
			$m = 7;
			for($i=0; $i<$n; $i++){

				$palabra .= "<table border=1 cellpadding = '5' cellspacing = '0'>";
				
				for($j=0; $j<$m; $j++){
					$palabra .= "<td>".$L[$i][$j]."</td>";

				}

				$palabra .= "</table>";

			}

			//echo "<br><br>palabra: ".$palabra."<br><br>";
			return $palabra;

			

		}
		
	}	

	public function compararB($cadenax, $cadenay){


		$n = count($cadenax) + 1;
		$m = count($cadenay) + 1;


		$L = array();

		for($i=0; $i<$n; $i++){
			$L[0][$i] = 0;	//para x
		}

		for($i=0; $i<$m; $i++){
			$L[$i][0] = 0;	//para y
		}


		for ($i=1; $i < $n; $i++) { 
			for ($j=1; $j < $m; $j++) { 
				if($cadenax[$i-1] == $cadenay[$j-1]){
					$L[$i][$j] = $L[$i-1][$j - 1] + 1;
				}else{

					if($L[$i-1][$j] >= $L[$i][$j-1]){
						$L[$i][$j] = $L[$i-1][$j];
					}else{
						$L[$i][$j]  = $L[$i][$j-1];
					}

				}
			}
		}

		//debuelve el ultimo valor, la solucion
		//return $L[$n - 1][$m -1];
		//echo "<br><br>ultimo solucion: ".$L[$n - 1][$m -1]."<br><br>";

		if(($L[$n - 1][$m -1]) != ""){

			//encontrar secuencia:

			$palabra = "";

			while ($n > 1 && $m > 1) {

				if($cadenax[$n-2] == $cadenay[$m-2]){

					if($palabra == ""){

						$palabra .= "".$cadenax[$n-2];
						$n--;
						$m--;

					}else{
						$palabra .= " - ".$cadenax[$n-2];
						$n--;
						$m--;
					}
					

				}else{
					if($L[$n-2][$m-1] >= $L[$n-1][$m-2]){
						$n--;
					}else{
						$m--;
					}
				}
			}

			//echo "<br><br>palabra: ".$palabra."<br><br>";
			return $palabra;

			$n = 7;
			$m = 7;
			for($i=0; $i<$n; $i++){
				
				for($j=0; $j<$m; $j++){
					echo $L[$i][$j]." - ";

				}

				echo "<br>";

			}

		}
		
	}	


}


?>