<?php
include_once("C:\wamp64\www\BALOTO\db\database_utilities.php");


class TbSorteobaloto{

	private $sorbalCodigo; 
    private $sorbalA; 
    private $sorbalB; 
    private $sorbalC; 
    private $sorbalD; 
    private $sorbalE; 
    private $sorbalF; 
    private $sorbalCae; 
    private $sorbalNombremes; 
    private $sorbalAnio; 
    private $sorbalMes; 
    private $sorbalDia; 
    private $sorbalFecha;


	function __construct(){

	}

    public function resultListaSorteoBalotos(){

        $query  = " SELECT sorbal_codigo, sorbal_a, sorbal_b, sorbal_c, sorbal_d, sorbal_e, 
                           sorbal_f, sorbal_cae, sorbal_nombremes, sorbal_anio, sorbal_mes, 
                           sorbal_dia, sorbal_fecha
                    FROM tb_sorteobaloto
                    ORDER BY sorbal_fecha ";

        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

        return $result;

    }


    public function resultCae(){

        $query  = " SELECT sorbal_codigo, sorbal_a, sorbal_b, sorbal_c, sorbal_d, sorbal_e, 
                           sorbal_f, sorbal_cae, sorbal_nombremes, sorbal_anio, sorbal_mes, 
                           sorbal_dia, sorbal_fecha
                    FROM tb_sorteobaloto
                    WHERE sorbal_cae = 'SI'
                    ORDER BY sorbal_fecha ";

        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

        return $result;

    }

}


?>