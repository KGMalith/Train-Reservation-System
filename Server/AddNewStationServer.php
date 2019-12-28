<?php
    require("config.php");

    if(isset($_POST["addstations"])){

        $station = mysqli_real_escape_string($db,$_POST["sname"]);

        if(empty($station)){
            header("location: ../addnewstation.php?error=emtyfields");
            exit();
        }else{
            $sql = "SELECT * FROM stations WHERE stationName ='".$station."'";
            $result = mysqli_query($db,$sql);
            $check = mysqli_num_rows($result);
            if($check > 0){
                header("location: ../addnewstation.php?error=nametaken");
                exit();
            }else{
                $sql = "INSERT INTO stations (stationName) VALUES ('$station') ";
                mysqli_query($db,$sql);
                header("location: ../addnewstation.php");
            }
        }

            
        

    }

?>