<?php 
	
	/**
	* Category Model
	*/
	class CatModel extends Amodel 
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function catList()
		{
			$sql = "SELECT * FROM category";
			$query = $this->db->query($sql);
            $result = $query->fetchAll();
            return $result;
		}
	}

 ?>