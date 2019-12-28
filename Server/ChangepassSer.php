<?php
    require "config.php";


    if(isset($_POST["changepass"])){

        $pass1 = mysqli_real_escape_string($db,$_POST["pass1"]);
        $pass2 = mysqli_real_escape_string($db,$_POST["pass2"]);
        $userid = mysqli_real_escape_string($db,$_POST["id"]);


        if(empty($pass1) || empty($pass2)){
            header("Location: ../changepassword.php?error=filds&id=".$userid);
            exit();
        }

        if($pass1 != $pass2){
            header("Location: ../changepassword.php?error=missmatch&id=".$userid);
            exit();

        }elseif (!preg_match("#[0-9]+#", $pass1)) { // check the password does have at least 1 no
            header("Location: ../changepassword.php?error=passnum&id=".$userid);
            exit();

        } elseif (!preg_match("#[A-Z]+#", $pass1)) { // check the password does have at least 1 capital letter
            header("Location: ../changepassword.php?error=passcap&id=".$userid);
            exit();

        } elseif (!preg_match("#[a-z]+#", $pass1)) { // check the password does have at least 1 lower case letter
            header("Location: ../changepassword.php?error=passsimm&id=".$userid);
            exit();

        } 


        if(count($errors)== 0){
            $hashpass = password_hash($pass1, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET passw1='$hashpass' WHERE userid='$userid' ";
            mysqli_query($db,$sql);
            header("Location: ../userpanel.php");
        }

    }

?>