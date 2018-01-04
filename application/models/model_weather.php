<?php
	/**
	* 
	*/
	class Model_weather extends CI_Model
	{
		//get categories data from database
		public function __construct()
	{
		$this->load->database();
	}

		function get_weather()
		{
			$query = $this->db->get('note');
			return $query->result();
		}
		//get products data from database by CategoriID	
	}
?>