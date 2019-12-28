<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>

</head>

<body>
    <div class="header1">
        <div class="h">
            <!--Title-->
            <h1><b>Book My Train</b></h1>
            <!--Logo & Login-->
            <img src="Img/log.jpg" class="logo">
            <a href="Login.php"><img src="Logo/lock.png" class="lock"></a>
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
        </div>
    </div>
    <section class="contact-sec">

        <!--Login Part-->
        <div id="contact-form">
            <img src="Logo/officer.png" alt="" class="avatar">
            <h2>Login</h2>

            <div>
              
            </div>

            <form action="Server/LoginSer.php" autocomplete="off"  method="POST" class="login-form">


                <label>  Username  </label> <br>
                <input type="text" name="name" placeholder="Enter User Name" required id="username2"><br>
                <br><br>

                <label>  Password  </label><br>
                <input type="password" name="pwd" required id="password2" placeholder="Enter Password"></br>
       
                <input type="submit" name="login" value="Login" id="sub6"><br><br>


                <p>Create an Account &nbsp;<a href="Register.php" class="a2">Sign Up </a></p>

            </form>

        </div>
    </section>
    <!--/Login Part-->



    <footer>
        <!--/Footer-->
        <!--Footer 01-->
        <div class="fullfooter">
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
            <!--Footer 02-->
            <div class="footer2">
                Copyright &copy; 2019 Book My Train Co.- All rights Reserved
            </div>
        </div>
    </footer>
</body>

</html>