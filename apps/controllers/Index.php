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

        public function category()	
        {
        	$data = array();
        	$cateModel = $this->load->model('CatModel');
        	$data['cat'] = $cateModel-> catList();
        	$this->load->view('category', $data);
        }

	}


 ?>		