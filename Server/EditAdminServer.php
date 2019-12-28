<?php
    include 'config.php';
    if(isset($_POST['edituser'])){

        $name = mysqli_real_escape_string($db,$_POST['uname']); 
        $mail = mysqli_real_escape_string($db,$_POST['email']); 
        $pass = mysqli_real_escape_string($db,$_POST['password']); 
        $repass = mysqli_real_escape_string($db,$_POST['repassword']);
        $id = mysqli_real_escape_string($db,$_POST['id']);

        if(empty($name) || empty($mail)){
            header("location: ../editadmin.php");
            exit();
        }
        if(preg_match('/^[a-zA-Z0-9]{6,}$/',$name)== false){
            header("Location: ../editadmin.php?error=nameerror");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username ='".$name."' AND usertype='".$role."'";
            $result = mysqli_query($db,$sql);
            $check = mysqli_num_rows($result);
            if($check > 0){
                header("Location: ../editadmin.php?error=nametaken");
                exit();
            }
        }

        if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
            header("Location: ../editadmin.php?error=invalidmail");
            exit();
        }

        if ($pass != $repass) {
            header("Location: ../editadmin.php?error=passmissmatch");
            exit();
            
        } elseif (!preg_match("#[0-9]+#", $pass)) { // check the password does have at least 1 no
            header("Location: ../editadmin.php?error=passnum");
            exit();
            
        } elseif (!preg_match("#[A-Z]+#", $pass)) { // check the password does have at least 1 capital letter
            header("Location: ../editadmin.php?error=passcap");
            exit();
            
        } elseif (!preg_match("#[a-z]+#", $pass)) { // check the password does have at least 1 lower case letter
            header("Location: ../editadmin.php?error=passsim");
            exit();
            
        } 
        $hashpass = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "UPDATE users SET username='$name', email='$mail',passw1='$hashpass' WHERE userid='$id'";
        mysqli_query($db,$sql);
        header("Location: ../editadmin.php");

    }
?>