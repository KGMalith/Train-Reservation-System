<?php 
include("config.php");
$id = $_GET['id'];
$query = "DELETE FROM contactus WHERE cid='".$id."'";
mysqli_query($db,$query);

header("Location: ../admincontactus.php");


?>