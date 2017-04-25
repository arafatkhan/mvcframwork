<?php include "inc/header.php"; ?>

<?php 

  include_once("system/lib/Main.php");
    
   $url = $_GET['url'];
   $url = explode('/', $url);
   echo "<pre>";
   print_r( $url);
   echo "</pre>";

    $arafat = "my,name,is,Arafat";
    $arafat = explode(",", $arafat);
    echo "<pre>";
  echo  $arafat[3]." is my name";
   echo "</pre>";

   
        
        
   
    
?>
















<?php include "inc/footer.php"; ?>