<?php 
	
	/**
	* Category Model
	*/
	class CatModel 
	{
		
		public function __construct()
		{
			//echo "Category Model";
		}

		public function catList()
		{
			return array(

				'CatOne'   =>    'Education',
				'catTwo'   =>    'Sports',
				'catThree' =>    'Travel',
				'catFour'  =>    'International'

				 );
		}
	}

 ?>