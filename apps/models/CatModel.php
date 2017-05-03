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

		public function catList($table)
		{
			return $this->db->select($table);
		}

		public function catById($table, $id)
		{
			$sql = "SELECT * FROM $table WHERE id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}

 ?>