<?php 

	/**
	* Default Controller
	*/
	class Index extends Acontroller					
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function home()
		{
			$this->load->view('home');
		}
	}


 ?>		