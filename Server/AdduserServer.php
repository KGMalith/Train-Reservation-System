<?php
    require 'config.php';

    if(isset($_POST['adduser'])){

        $name = mysqli_real_escape_string($db,$_POST['uname']);
        $mail = mysqli_real_escape_string($db,$_POST['email']);
        $pass = mysqli_real_escape_string($db,$_POST['password']);
        $repass = mysqli_real_escape_string($db,$_POST['repassword']);
        $role = mysqli_real_escape_string($db,$_POST['role']);

        if(empty($name) || empty($mail) || empty($pass) || empty($repass)){
            header("Location: ../adduser.php?error=emptyFields");
            exit();
        }

        if(preg_match('/^[a-zA-Z0-9]{6,}$/',$name)== false){
            header("Location: ../adduser.php?error=nameerror");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username ='".$name."' AND usertype='".$role."'";
            $result = mysqli_query($db,$sql);
            $check = mysqli_num_rows($result);
            if($check > 0){
                header("Location: ../adduser.php?error=nametaken");
                exit();
            }
        }

        if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
            header("Location: ../adduser.php?error=invalidmail");
            exit();
        }

        if ($pass != $repass) {
            header("Location: ../adduser.php?error=passmissmatch");
            exit();
            
        } elseif (!preg_match("#[0-9]+#", $pass)) { // check the password does have at least 1 no
            header("Location: ../adduser.php?error=passnum");
            exit();
            
        } elseif (!preg_match("#[A-Z]+#", $pass)) { // check the password does have at least 1 capital letter
            header("Location: ../adduser.php?error=passcap");
            exit();
            
        } elseif (!preg_match("#[a-z]+#", $pass)) { // check the password does have at least 1 lower case letter
            header("Location: ../adduser.php?error=passsim");
            exit();
            
        } 
        $hashpass = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username,email,passw1,usertype) VALUES('$name','$mail','$hashpass','$role')";
        mysqli_query($db,$sql);
        header("Location: ../adduser.php");
    }
?>