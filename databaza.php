<?php 
$servername = "localhost";
$username = "root";
$pass = "11Mission11";
$dbname = "hees";
$conn = mysqli_connect($servername, $userame, $pass, $dbname); 
if(!$conn){
	echo "deshtoi lidhja"; die();
}

?>