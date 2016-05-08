<?php
$server="localhost";
$username="root";
$password="";
$db="apsi";

$koneksi = new mysqli($server, $username, $password, $db);
if($koneksi)
{
    //echo"Sukses";
}
else{
   echo " ".mysql_error();
}
 
?>

