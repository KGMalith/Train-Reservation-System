<?php


//Connect to the database
require 'config.php';

//If the register button is clicked
if (isset($_POST['addtrains'])) {

    $trainName = mysqli_real_escape_string($db, $_POST['trainName']);
    $start = mysqli_real_escape_string ($db,$_POST['starts']);
    $destination = mysqli_real_escape_string($db, $_POST['destination']);
    $arrivaltime = mysqli_real_escape_string($db, $_POST['arrival']);
    $departure = mysqli_real_escape_string($db, $_POST['departure']);
    $price = mysqli_real_escape_string($db,$_POST['price']);
    
    if(empty($trainName) || empty($start) || empty($destination) || empty($arrivaltime) || empty($departure) || empty($price)){
        header("location: ../addNewTrains.php?error=emptyfields");
        exit();
    }


     if($start == 'pick' || $destination == 'pick' || $trainName== 'pick'){
        header("location: ../addNewTrains.php?error=notpicked");
        exit();
     }

     if($start == $destination){
        header("location: ../addNewTrains.php?error=samestation");
        exit();
     }
       
        $sql = "INSERT INTO trains( trainName, trainStart, trainEnd, trainStratTime, trainEndTime,tprice) VALUES 
        ('$trainName','$start','$destination','$arrivaltime','$departure','$price')";
        mysqli_query($db, $sql);
        header('location: ../addNewTrains.php');
     
    }