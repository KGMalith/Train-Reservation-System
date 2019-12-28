<?php
    include 'Server/config.php';
    session_start();
    if(!isset($_SESSION['userid']) || !isset($_SESSION['username'])){
        header("location: login.php");
    }

    $id = mysqli_real_escape_string($db,$_SESSION['userid']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">

    <Title>
        Admin
    </Title>

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




    <div id="box2">
        <div class="topic3">
            <h2>My Admin</h2>
        </div><br>

        <a href="addNewTrains.php" class="newbutton"> <img src="Logo/file.png"> Add New Trains & Train Stations</a>
        <a href="removeTrains.php" class="newbutton1"> <img src="Logo/remove (1).png"> Remove Train & Routes</a>
        </br>
        </br>
        </br>
        </br>
        </br>

        <a href="Addpromo.php" class="newbutton2"><img src="Logo/price-tag (1).png"> Add Promotions & Discounts</a>
        <a href="removepromo.php" class="newbutton3"> <img src="Logo/price-tag.png"> Remove Promotions & Discounts</a>
        </br>
        </br>
        </br>
        </br>
        </br>

        <a href="admincontactus.php" class="newbutton4"> <img src="logo/resume.png"> Contact Us</a>
        <a href="confirm&refund.php" class="newbutton5"> <img src="logo/refund.png"> Confirm & Refund</a>
        </br>
        </br>
        </br>
        </br>
        </br>
        <a href="adduser.php" class="newbutton4"> <img src="logo/adduser.png"> Add Admin</a>
        <a href="editadmin.php?id=<?php echo $id;?>" class="newbutton5"> <img src="logo/edituser.png"> Edit Details</a>
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
        Copyright &copy; 2019 Book My Train Co.- All rights Reserved
    </div>

</footer>



</html>