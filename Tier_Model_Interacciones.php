<?php
/**
* Modelo para el acceso a la base de datos y funciones CRUD
* Autor: ELivar Largo
* Sitio Web: wwww.ecodeup.com
*/
class InteraccionesTier extends Global_Model_Base
{
	//atributos
	private $cust_code;
	private $fecha_interaccion;
	private $tipo_interaccion;
	private $time_stamp;
 
	//constructor de la clase
	function __construct()
	{
		// $this->cust_code = $cust_code;
		// $this->fecha_interaccion = $fecha_interaccion;
		// $this->tipo_interaccion = $tipo_interaccion;
		// $this->time_stamp = $time_stamp;
    }

    public function get_cust_code() {
        return $this->cust_code;
    }
 
    public function set_cust_code($cust_code) {
        $this->cust_code = $cust_code;
    }
     
    public function get_fecha_interaccion() {
        return $this->fecha_interaccion;
    }
 
    public function set_fecha_interaccion($fecha_interaccion) {
        $this->fecha_interaccion = $fecha_interaccion;
    }
 
    public function get_tipo_interaccion() {
        return $this->tipo_interaccion;
    }
 
    public function set_tipo_interaccion($tipo_interaccion) {
        $this->tipo_interaccion = $tipo_interaccion;
    }
 
    public function get_time_stamp() {
        return $this->time_stamp;
    }
 
    public function set_time_stamp($time_stamp = null) {
        $this->time_stamp = date("YmdHi",time());
    }

    public function save() {
        $sql = "INSERT INTO COBROS_OWN.INTERACCIONES_TIER (CUST_CODE, FECHA_INTERACCION, TIPO_INTERACCION, TIME_STAMP)
                VALUE (". $this->cust_code . "," 
                        . $this->fecha_interaccion . "," 
                        . $this->tipo_interaccion . "," 
                        . date("YmdHi",time()) . ")";
        $this->DB->Execute($sql);
    }

}