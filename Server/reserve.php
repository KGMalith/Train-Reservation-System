<?php
    session_start();

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "train_system";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);