<?php
	// defined(BASEPATH) OR exit('No direct access allowed');
	

	class Purchases_model extends CI_Model {

		public function get_purchases() {
			
			$this->db->order_by('date', 'DESC');
			$query = $this->db->get('purchases');
			return $query->result_array();
		}

		public function create($data){
			if($this->db->insert($data)){
				return 'Data inserted successfully';
			}
		}
}
