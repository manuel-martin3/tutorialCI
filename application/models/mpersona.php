<?php 

/**
* 
*/
class mPersona extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function guardar($param){
		$campos = array(			
			'nombre' => $param['nombre'] , 
			'appaterno' => $param['appaterno'] , 
			'apmaterno' => $param['apmaterno'] , 
			'email' => $param['email'] , 			
			'dni' => $param['dni'] ,
			'fecnac' => date('Y-m-d',strtotime(str_replace('/', '-', $param['fecnac'])))); 
		$this->db->insert('persona',$campos);
		return $this->db->insert_id();
	}

	public function actualizarDatos($param){
		$campos = array(
			'nombre' => $param['nombre'], 
			'appaterno' => $param['appaterno'] , 
			'apmaterno' => $param['apmaterno'] , 
			'email' => $param['email']
			);

		//para actualizar registros agregar la condicional primero... 
		$this->db->where('idPersona',$this->session->userdata('s_idPersona'));
		$this->db->update('persona',$campos);	

		return 1;
	}

	public function eliminarPersona($idp){
		//forma 1 de eliminar registro
		$campos = array(
			'idPersona' => $idp
			);		
		$this->db->delete('persona', $campos);

		//forma 2 de eliminar registro
		// $this->db->where('idPersona',$idp);
		// $this->db->delete('persona');


	}

}

 ?>