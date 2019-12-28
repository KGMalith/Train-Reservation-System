<?php
    require("Server/config.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Add New Trains</title>


</head>

<body>
    <div class="header1">
        <div class="h">
            <!--Title-->
            <h1><b>Book My Train</b></h1>
            <!--Logo & Login-->
            <img src="Img/log.jpg" class="logo">
            <a href="#"><img src="Logo/lock.png" class="lock"></a>
        </div>
        <!--Navigation-->
        <div class="navi">
            <a class="home1" href="Home.php">Home</a>
            <a href="Timetable.php">Time Table</a>
            <a href="TicketPrice.php">Ticket Price</a>
            <a href="promotions.php">Promotions</a>
            <a href="aboutus.php">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
            <div class="search">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
            <a href="Server/logout.php">Logout</a>
        </div>
    </div>


    <!--Form-->
    <div id="box8">
        <div class="topic2">
            <h3>Add New Train</h3>
        </div>

        <form name="addTrain" action="Server/AddNewTrainsServer.php"  method="POST" class="FIM">


            <label>Train Name </label><br>
            <select name="trainName" id="trainName">
                    <option value="pick">--SELECT--</option>
                    <?php
                        $sql =  mysqli_query($db,"SELECT tname From trainnames");
                        while($row = mysqli_fetch_array($sql)){
                            echo "<option value='".$row['tname']."'> ".$row['tname']."</option> ";
                        }
                    ?>
            </select>
            <br><br>

            <label>Start </label><br>
            <select name="starts" id="source">
                    <option value="pick">--SELECT--</option>
                    <?php
                        $sql =  mysqli_query($db,"SELECT stationName From stations");
                        while($row = mysqli_fetch_array($sql)){
                            echo "<option value='".$row['stationName']."'> ".$row['stationName']."</option> ";
                        }
                    ?>
            </select>
            <br><br>
            

            <label>Destination </label><br>
            <select name="destination" id="destination">
                    <option value="pick">--SELECT--</option>
                    <?php
                        $sql =  mysqli_query($db,"SELECT stationName From stations");
                        while($row = mysqli_fetch_array($sql)){
                            echo "<option value='".$row['stationName']."'> ".$row['stationName']."</option> ";
                        }
                    ?>
            </select>
            <br><br>
            

            <label>Start Time </label><br>
            <input type="text" name="arrival" id="tainArTime"></br><br>

            <label>End Time </label><br>
            <input type="text" name="departure" id="tainDeTime"></br><br>

            <label>Ticket Price (RS)</label><br>
            <input type="number" step=any name="price" id="tainDeTime" ></br><br>

            <button type="submit" id="sub7" name="addtrains">Confirm</button>
            <a href="admin.php"><button type="button" id="cancel1">Cancel</button></a>
        </form>

    </div>

    <div id="box9">
        <div class="topic5">
            <h4>More Options</h4>
        </div>
        <a href="addnewstation.php"><button type="button" id="sub8">Add New Train Station</button></a>
        <br>
        <a href="addnewtrainname.php"><button type="button" id="sub8">Add New Train Name</button></a>
    </div>




</body>
<!--Footer 01-->
<div class="footer1">
    <div>
        <img src="Logo/phone-book.png" class="contact">
    </div>
    <div class="email">Email :- Contact@Bookmytrain.com </div>
    <div class="social">
        <a href="https://twitter.com"><img src="Logo/twitter.png"></a>
        <a href="https://www.linkedin.com"><img src="Logo/linkedin.png"></a>
        <a href="https://www.facebook.com"><img src="Logo/facebook.png"></a>
        <a href="https://www.instagram.com/"><img src="Logo/instagram.png"></a>
    </div>

    <div>
        <ul id="link">
            <a href="ContactUs.php">
                <li>Contact Us</li>
            </a>
            <a href="aboutus.php">
                <li>About Us</li>
            </a>
            <a href="terms.php">
                <li>Terms & Conditions</li>
            </a>
        </ul>

    </div>

    <div class="payment">
        <img src="Logo/paypal.png">
        <img src="Logo/mastercard.png">
        <img src="Logo/visa.png">
        <img src="Logo/american-express.png">
    </div>
</div>
</body>


<footer>
    <!--Footer 02-->
    <div class="footer2">
        Copyright &copy; 2019 Book My Train Co. ~All rights Reserved~
    </div>

</footer>

</html>