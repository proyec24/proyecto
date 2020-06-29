<?php
	$user="bb9748f13e1e28";
	$pass="40a5c5ce";
	$server="us-cdbr-east-02.cleardb.com";
	$db="heroku_1e307505c181aea";
	$conn = new mysqli($server, $user, $pass, $db);
 	if($conn->connect_error){
    	die("Error de conexion: " .$conn->connection_error);
  	}else{
  		echo"1";
  	}
?>
