<?php
    session_start();

    if(!isset($_SESSION["userid"]) && !isset($_SESSION["username"])){
        header("location:Login.php");
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        User Panel
    </title>
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
    <!-- UserPanel -->

    <div id="box6">
        <div class="topic4">
            <h2>User Panel</h2>
        </div>

        <a href="EditUser.php?id=<?php echo $_SESSION["userid"]; ?>" class="newbutton"> <img src="Logo/user.png"> Edit Your Details</a>
        <a href="Booking History.php" class="newbutton1"> <img src="Logo/history.png"> Booking History</a>
        </br>
        </br>
        </br>
        </br>
        </br>

        <a href="BooikingCancellation.php" class="newbutton2"><img src="Logo/Booking Cancel.png"> Booking Cancellation</a>
        <a href="Refund details.php" class="newbutton3"> <img src="Logo/refund.png"> Refund Details</a>
        </br>
        </br>
        </br>
        </br>
        </br>


    </div>
    <div>

        <div id="but">
            <a href="Reservation.php"><button type="button"  class="button3">Reserve Your Ticket</button></a>
        </div>

        <div id="but">
            <a href="findnewlocations.php"><button type="button"  class="button2"> Find New Location</button></a>
        </div>



    </div>

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
    <!--/Footer-->
</body>
<footer>
    <!--Footer 02-->
    <div class="footer2">
        Copyright &copy; 2019 Book My Train Co.- All rights Reserved
    </div>

</footer>

</html>