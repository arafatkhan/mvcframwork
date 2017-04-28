<?php include "inc/header.php"; ?>

<?php 

  include_once("system/lib/Main.php");
  include_once("system/lib/Acontroller.php");

    
   $url = isset($_GET['url']) ? $_GET['url'] : NULL;

    if ( $url != NULL ) {
       $url = rtrim( $url,'/');
       $url = explode('/', $url);

    } else {
      unset($url);
    }
    

  



   if (isset($url[0])) {
     include ('apps/controllers/'.$url[0].'.php');
     $arafat = new $url[0]();

     if (isset($url[2])) {
       $arafat->$url[1]($url[2]);
     } else {
       if (isset($url[1])) {
         $arafat->$url[1]();
       } else {
         # code...
       }
       
     }
     
   } else {
     # code...
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
















<?php include "inc/footer.php"; ?>