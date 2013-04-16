<?php

	class Subir_modelo extends CI_Model{
		
		function seleccionar_articulo(){

		}
		public function insertar_datos($datos)
		{
			//inserta los datos en la tabla "publicacion"
			return $this->db->insert('publicacion',$datos);
		}
	}