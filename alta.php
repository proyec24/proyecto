<?php
    include 'db.php';
    /*$name = "Christofer";
    $lname = "Luevanos";
    $age = "18";
    $phone = "3339697191";*/
	$name = filter_input(INPUT_POST, "name");
    $lname = filter_input(INPUT_POST, "apellidos");
    $age = filter_input(INPUT_POST,"edad");
    $phone = filter_input(INPUT_POST,"telefono");
  	$query = "INSERT INTO trabajadores (nombre,apellidos,edad,telefono) VALUES('$name','$lname','$age','$phone')";
  	$result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
  	if($row){
    	echo '1';
  	}
  	mysqli_close($conn);
