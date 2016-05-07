<?php
$server="localhost";
$username="root";
$password="";
$db="apsi";

$konkesi= mysqli_connect($server,$username,$password,$db);

if($konkesi)
{
    echo"Sukses";
}
else{
   echo " ".mysql_error();
}
 
?>

