<?php 

 /**
 * Main model
 */
 class Amodel
 {
 	protected $db = array();
 	
 	public function __construct()
 	{
 		$this->db = new Database();
 	}
 }

 ?>