<?php

$id = $_GET['town'];
  
$conn = new mysqli("localhost", "root", "", "mysqljquery");
$sql1 = "SELECT * FROM towns WHERE id = '$id' ";
$data1 = $conn->query($sql1);
$row1 = $data1->fetch_assoc();

echo "Town:\n".$row1['town_name']."\n\nTown Info:\n".$row1['town_info'];

?>