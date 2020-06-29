<?php
    include 'db.php';
    
    $name = filter_input(INPUT_POST, "name");
    $id = filter_input(INPUT_POST, "id");
    $lname = filter_input(INPUT_POST, "lname");
    $age = filter_input(INPUT_POST, "age");
    $phone = filter_input(INPUT_POST, "phone");
    echo '1';
  	$query = "UPDATE trabajadores SET nombre='$name',apellidos='$lname',edad='$age', telefono='$phone' WHERE id='$id' ";
  	$result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
  	if($row){
    	echo '1';
  	}
  	mysqli_close($conn);
?>