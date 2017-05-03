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
        	$table = "category";
        	$cateModel = $this->load->model('CatModel');
        	$data['cat'] = $cateModel-> catList($table);
        	$this->load->view('category', $data);
        }

        public function catById(){
        	$data = array();
        	$table = "category";
        	$id = 4;
        	$catModel = $this->load->model('catModel');
        	$data['catbyid'] = $catModel->catById($table,$id);
        	$this->load->view("catbyid", $data);
        }

	}


 ?>		