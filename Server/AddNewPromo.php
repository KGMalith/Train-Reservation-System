<?php

//Connect to the database
require 'config.php';

//If the register button is clicked
if (isset($_POST['addpromo'])) {

    $pname = mysqli_real_escape_string($db, $_POST['pname']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $promostart = mysqli_real_escape_string($db, $_POST['promostart']);
    $promoend = mysqli_real_escape_string($db, $_POST['promoend']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    
    if(empty($pname) || empty($title) || empty($promostart) || empty($promoend)){
        header("Location: ../Addpromo.php?error=emptyfields");
        exit();
    }

    $sql = "SELECT * FROM promotion WHERE pname='".$pname."'";
    $result = mysqli_query($db,$sql);
    $check = mysqli_num_rows($result);
    if($check > 0){
        header("Location: ../Addpromo.php?error=pnametaken");
    }


     //If there ara no errors, save to the database
   
       
        $sql = "INSERT INTO promotion( pname, title, promostart, promoend, description) VALUES ('$pname','$title', '$promostart','$promoend','$description')";
        mysqli_query($db,$sql);
        header('location: ../Addpromo.php'); 
  

    }