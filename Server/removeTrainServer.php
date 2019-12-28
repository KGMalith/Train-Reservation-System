<?php 
    include("config.php");
    $id = $_GET['id'];
    $query = "DELETE FROM `trains` WHERE trainid='".$id."'";
    mysqli_query($db,$query);
    header("Location: ../removeTrains.php");


?>