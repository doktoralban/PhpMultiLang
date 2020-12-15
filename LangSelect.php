<?php
session_start(); 
 
 if(isset($_GET["Lng"]))
{
    $SelectedLang = $_GET["Lng"] ;
    
 
  $_SESSION["SelectedLang"] = $SelectedLang;
    
   header("Location:index.php"); 

 exit();
}
 
 ?>


 




 