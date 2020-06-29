<?php
    include 'db.php';

	$user = filter_input(INPUT_POST, "id");
    echo '1';
  	$query = "DELETE FROM trabajadores WHERE id='$user'";
  	$result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
  	if($row){
    	echo '1';
  	}
  	mysqli_close($conn);
?>