<?php
	$user="root";
	$pass="";
	$server="localhost";
	$db="db_proyecto";
	$conn = new mysqli($server, $user, $pass, $db);
 	if($conn->connect_error){
    	die("Error de conexion: " .$conn->connection_error);
  	}
?>
