<?php
session_start();

$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['email'];
$a=$_POST['age'];

$_SESSION['user']=$x.$y;
$_SESSION['Email']=$z;
$_SESSION['age']=$a;


if(isset($_SESSION['user'])&&isset($_SESSION['Email'])&&isset($_SESSION['age']))
{ 
  echo "Hi ".$_SESSION['user'];
  echo '<br>'; 
  echo "Your Data is :";
  echo '<br>'; 
  echo "Your Email is ".$_SESSION['Email'];
  echo '<br>';  
  echo "Your Age is ".$_SESSION['age'];
  echo '<br>';
}
echo 'the right email is';
echo'<br>';
var_dump(filter_var($z,FILTER_SANITIZE_EMAIL));
echo'<br>';
$u=filter_var($a,FILTER_VALIDATE_INT);
if($u==true){
 echo"right age";
}else{
  echo "age must int";
}

setcookie("firstname",$x);

?>
