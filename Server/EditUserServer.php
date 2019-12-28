<?php
    require 'config.php';

    $errors = array();

    if(isset($_POST['edituser'])){

        $uname = mysqli_real_escape_string($db,$_POST['uname']);
        $firstname = mysqli_real_escape_string($db,$_POST['fname']);
        $lastname = mysqli_real_escape_string($db,$_POST['lname']);
        $gen = mysqli_real_escape_string($db,$_POST['gender']);
        $dob = mysqli_real_escape_string($db,$_POST['bday']);
        $mail= mysqli_real_escape_string($db,$_POST['email']);
        $nation = mysqli_real_escape_string($db,$_POST['nationality']);
        $raddress = mysqli_real_escape_string($db,$_POST['address']);
        $mnumber = mysqli_real_escape_string($db,$_POST['mnumber']);
        $userid = mysqli_real_escape_string($db,$_POST['uid']);

                     //ensure that form fields are filled properly
                     if(empty($username) || empty($fname) || empty($lname) || empty($gender) || empty($phone) || empty($email)){
                        array_push($errors,"Required Fields Cannot Be Empty");   
                    }
        
                    //check username
                    if (preg_match('/^[a-zA-Z0-9]{6,}$/', $username) == false) { //check the username
                    array_push($errors, "User name can only have english chars + numbers & longer than or equals 6 chars ");
                    }else{
                        $sql = "SELECT * FROM users WHERE username={$uname} AND userid !={$userid} ";
                        $result = mysqli_query($db,$sql);
                        $checkResult = mysqli_num_rows($result);
                        if($checkResult > 0){
                            array_push($errors,"User Name Already Taken");
                        }
                    }
        
                    //check mobile number
                        if (preg_match("/^[0-9]{10}$/", $phone) == false) { 
                        array_push($errors, "Contact Number only can have 10 numbers ");
                        }
                    
                    //check email
                        if (!empty($mail)) {
                            if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
                                array_push($errors, "Invalid Email address");
                            }
                        }

                    if(count($errors == 0)){

                        $sql = "UPDATE users SET username = '$uname',fname='$firstname', lname='$lastname',gender='$gen',dob='$dob',email='$mail',nationality='$nation',address='$raddress',mnumber='$mnumber' WHERE userid='$userid'";
                        mysqli_query($db,$sql);
                        header("Location: ../userpanel.php");
                    }
    }

?>