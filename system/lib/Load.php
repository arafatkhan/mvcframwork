<?php 
	/**
	* Load class 
	*/
	class Load
	{		
		
		public function view($fileName)
		{
			include "apps/views/".$fileName.".php";
		}
	}
 ?>	