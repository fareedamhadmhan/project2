<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "project2";

$con = mysqli_connect($servername, $username, $password,$databasename)or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

if($con){
  
}else {
    echo 'Failed to Connect';
}

?>

