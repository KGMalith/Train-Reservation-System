<?php 
include("config.php");
$id = $_GET['id'];
$query = "DELETE FROM `promotion` WHERE pid='".$id."'";
mysqli_query($db,$query);
header("Location: ../removepromo.php");


?>