<?php
//Connect to the database
$db = mysqli_connect("localhost", "root", "", "train_system");

if (!$db) {
    die("Connection Failed! " . mysqli_connect_error());
}
