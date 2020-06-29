<?php
	include 'db.php';
	$user = filter_input(INPUT_POST, "usuario");
  	$password = filter_input(INPUT_POST, "contra");
  	$query = "SELECT * FROM administradores WHERE usuario ='$user' AND pass='$password'";
  	$result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
  	if($row){
    	echo '1';
  	}
  	mysqli_close($conn);
?>