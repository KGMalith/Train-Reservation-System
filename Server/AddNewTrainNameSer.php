<?php
    require("config.php");

    if(isset($_POST["addtrainname"])){

        $trainName = mysqli_real_escape_string($db,$_POST["trainname"]);

        if(empty($trainName)){
            header("location: ../addnewtrainname.php?error=emtyfields");
            exit();
        }else{
            $sql = "SELECT * FROM trainnames WHERE tname='".$trainName."'";
            $result = mysqli_query($db,$sql);
            $check = mysqli_num_rows($result);
            if($check > 0){
                header("location: ../addnewtrainname.php?error=nametaken");
                exit();
            }else{
                $sql = "INSERT INTO trainnames (tname) VALUES ('$trainName') ";
                mysqli_query($db,$sql);
                header("location: ../addnewtrainname.php");
            }
        }

            
        

    }

?>