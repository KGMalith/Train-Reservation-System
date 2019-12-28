<?php 

    $username = "";
    $fname ="";
    $lname ="";
    $gender="";
    $birthday="";
    $email="";
    $nationality="";
    $address="";
    $phone="";
    $password="";
    $confirmPassword="";
    $errors = array();

    include 'config.php';

    

        //If the register button is clicked
    if (isset($_POST['signup'])) {
        $username = mysqli_real_escape_string($db, $_POST['uname']);
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $birthday = mysqli_real_escape_string($db, $_POST['bday']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $phone = mysqli_real_escape_string($db, $_POST['mnumber']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($db, $_POST['repassword']);
        

             //ensure that form fields are filled properly
            if(empty($username) || empty($fname) || empty($lname) || empty($gender) || empty($phone) || empty($email)|| empty($password)){
                array_push($errors,"Required Fields Cannot Be Empty");   
            }

            //check accepted the conditions
            if(!isset($_POST['chkcon'])){
                array_push($errors,"Please Accept Terms and Conditions");
            }


            //check username
            if (preg_match('/^[a-zA-Z0-9]{6,}$/', $username) == false) { //check the username
            array_push($errors, "User name can only have english chars + numbers & longer than or equals 6 chars ");
            }else{
                $sql = "SELECT * FROM users WHERE username={$username}";
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
            

            //check password
            if ($password != $confirmPassword) {
                array_push($errors, "Confirm password doesn't match with password");
                
            } elseif (!preg_match("#[0-9]+#", $password)) { // check the password does have at least 1 no
                array_push($errors, "Your Password Must Contain At Least 1 Number & 1 Capital Letter & 1 Lowercase Letter! ");
                
            } elseif (!preg_match("#[A-Z]+#", $password)) { // check the password does have at least 1 capital letter
                array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
                
            } elseif (!preg_match("#[a-z]+#", $password)) { // check the password does have at least 1 lower case letter
                array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
                
            } 
        

        

            //If there ara no errors, save to the database
            if (count($errors) == 0) {
            
                $hashpass = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username,fname,lname,gender,dob,email,nationality,address,mnumber, passw1) VALUES ('$username','$fname','$lname','$gender','$birthday',' $email','$nationality','$address','$phone','$hashpass')";
                mysqli_query($db, $sql);

                header('location: Login.php'); //redirect o the login page
            }
    }


?>