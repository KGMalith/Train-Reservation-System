<?php

//Connect to the database
require 'config.php';

//If the register button is clicked
if (isset($_POST['contactsub'])) {

    $username = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['mail']);
    $message = mysqli_real_escape_string($db, $_POST['message']);
   
    if(empty($username) || empty($email)|| empty($message)){
        header("Location: ../ContactUs.php?error=emptyFields");
    }
   
    elseif (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        header("Location: ../ContactUs.php?error=invalidemail");
    }


     //If there ara no errors, save to the database
    
        $sql = "INSERT INTO contactus ( username, email, message) VALUES ('$username','$email', '$message')";
        mysqli_query($db, $sql);
        header('location: ../ContactUS.php'); //redirect o the login page

     

    }