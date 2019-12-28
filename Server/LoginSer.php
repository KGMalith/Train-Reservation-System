<?php

if (isset($_POST['login'])) {

    require 'config.php';

    $username = mysqli_real_escape_string($db,$_POST['name']);
    $password = mysqli_real_escape_string($db,$_POST['pwd']);
    

    if (empty($username) || empty($password)) {
        header("location: ../Login.php?error=emptyFields");
        exit();

    } else {
        //$sql = "SELECT * FROM users;";
        $sql = "SELECT * FROM users WHERE username =?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../Login.php?error=SQLError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['passw1']); //dehash the password
                $type = $row['usertype'];
                if ($pwdCheck == false) {
                    header("Location: ../Login.php?error=invalidpwd");
                } else if ($pwdCheck == true && $type == 'user') {
                    session_start();
                    $_SESSION["userid"] = $row['userid'];
                    $_SESSION["username"] = $row['username'];

                    header('location: ../userpanel.php'); //redirect o the user page

                }else if ($pwdCheck == true && $type == 'admin') {
                    session_start();
                    $_SESSION["userid"] = $row['userid'];
                    $_SESSION["username"] = $row['username'];

                    header('location: ../admin.php');
                }
            } else {
                header("Location:../Login.php?error=invaliduser");
            }
        }
    }
}

?>