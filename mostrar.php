<?php
header('Content-Type: application/json');
include 'db.php';
$resultadoArray = array();
$aux=1;
if($aux == 1){
  $Query = "SELECT * FROM trabajadores WHERE id >= '$aux'";
  $Resultado = mysqli_query($conn, $Query);
  foreach($Resultado as $row){
    $resultadoArray[] = $row;
  }
}


echo json_encode($resultadoArray);
?>