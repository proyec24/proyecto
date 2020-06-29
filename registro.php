<?php
    include 'db.php';
    
    $name = filter_input(INPUT_POST, "name");
    $lname = filter_input(INPUT_POST, "apellidos");
    $user = filter_input(INPUT_POST,"usuario");
    $pass = filter_input(INPUT_POST,"pass");
  	$query = "INSERT INTO administradores (nombre,apellido,usuario,pass) VALUES('$name','$lname','$user','$pass')";
  	$result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
  	if($row){
    	echo '1';
  	}
  	mysqli_close($conn);
