<?php

	class Modelo_db extends CI_Model{
		
		//funcion para buscar solo un articulo
		public function buscar_articulo($titulo_url)
		{
			//Que nos devuelva solo lo que queremos "titulo,publi,fech_up,tags"
			$this->db->select('titulo,publi,fech_up,tags,titulo_url');
			
			//que sea de la tabla "publicacion"
			$this->db->from('publicacion');
			
			//que el $id sea igual al 'id' de la DB
			$this->db->where('titulo_url',$titulo_url);
			
			//obtenemos los resultados
			$resultado=$this->db->get();
			
			if ($resultado->num_rows()>0)
			{
				foreach ($resultado->result() as $valor) {
					$campos[]=$valor;
				}
				return $campos;
			}
			else{
				return false;
			}
		}
		
		//funcion para buscar muchos articulos
		public function buscar_articulos()
		{
			//buscara los 5 ultimos articulos en forma descendente
			//deauerdo a su "id"
			$this->db->select('titulo,publi,fech_up,tags,titulo_url');
			$this->db->from('publicacion');
			$this->db->order_by('id','desc');
			$this->db->limit(5);
			$resultados=$this->db->get();

			if ($resultados->num_rows()>0)
			{
				foreach ($resultados->result() as $valor) {
					$campos[]=$valor;
				}
				return $campos;
			}
			else{
				return false;
			}
		}
		
		//funcion para subir datos de un articulos
		public function subir_articulo($datos)
		{
			//inserta los datos recividos en la tabla "publicacion"
			return $this->db->insert('publicacion',$datos);
		}
		
		//funcion para modificar datos de un articulos
		public function modificar_articulo()
		{
		}

		//Eliminar un articulo
		public function eliminar_articulo($id)
		{
			return $this->db->delete('publicacion',array('id',$id));
		}
	}