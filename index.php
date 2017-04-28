

<?php 

  include_once("system/lib/Main.php");
  include_once("system/lib/Acontroller.php");
  include_once("system/lib/Load.php");

    
   $url = isset($_GET['url']) ? $_GET['url'] : NULL;

    if ( $url != NULL ) {
       $url = rtrim( $url,'/');
       $url = explode('/', filter_var($url,FILTER_SANITIZE_URL ));

    } else {
      unset($url);
    }

    if (isset($url[0])) {
     include ('apps/controllers/'.$url[0].'.php');
     $ctrl = new $url[0]();

     if (isset($url[2])) {
       $ctrl->$url[1]($url[2]);
     } else {
       if (isset($url[1])) {
         $ctrl->$url[1]();
       } else {
         # code...
       }
       
     }
     
   } else {
     include "apps/controllers/Index.php";
     $ctrl = new Index();
     $ctrl -> home();
   }
   
  
   
  
   
   

    




   
     

     
      
   



//   echo "<pre>";
//   print_r( $url);
//   echo "</pre>";
//
//    $arafat = "my,name,is,Arafat";
//    $arafat = explode(",", $arafat);
//    echo "<pre>";
//     print_r($arafat);
//     echo "</pre>";

   
        
        
   
    
?>
















