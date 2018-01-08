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
		//get products data from database by CategoriID
		function get_weather()
		{
			$query = $this->db->get('note');
			return $query->result();
		}
		
		//get temperature data from database 
		function get_data_temp(){
        $query = $this->db->query("SELECT jam,temp FROM temp_graph");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	}
?>