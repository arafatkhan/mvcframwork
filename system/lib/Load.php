<?php 
	/**
	* Load class 
	*/
	class Load
	{		
		
		public function view($fileName, $data = NULL)
		{
			include "apps/views/".$fileName.".php";
		}

		public function model($modelName)
		{
			include "apps/models/".$modelName.".php";
			return new $modelName();
		}


	}
 ?>	