<?php
session_start();
$x=$_SESSION['firstname']="Rania";
$y=$_SESSION['lastname']="Fahmy";
$z=$_SESSION['email']="raniafahmy1111@gmail.com";
$a=$_SESSION['age']="20";

if(isset($x)&&isset($y)&&isset($z)&&isset($a) )
{ echo "Hi ".$x." ".$y;
  echo '<br>'; 
  echo "Your Data is :";
  echo '<br>'; 
  echo "Your Email is ".$z;
  echo '<br>';  
  echo "Your Age is ".$a;
}

setcookie("firstname","Rania");

?>