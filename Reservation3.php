<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Reservation3
    </title>


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

    <div class="app-container">
        <div class="top-box">
            <p><span class="left-icon">&#x2190;</span> CHECKOUT <span class="right-icon">&#xb7;&#xb7;&#xb7;</span> </p>
        </div>

        <div class="middle-box">
            <h1>1599<span>$</span></h1>
            <p>Pay To Bookmytrain company</p>
        </div>

        <div class="bottom-box">
            <button type="button" class="payment-option-btn">Pay with Paypal</button>

            <div class="card-details">
                <p>Pay using credit or debit card</p>
                <div class="card-num-filed-group">
                    <label>Card Number</label><br>
                    <input type="text" class="card-num-filed" placeholder="xxxx-xxxx-xxxx-xxxx">
                </div>


                <div class="date-filed-group">
                    <label>Expiry Date</label><br>
                    <input type="text" class="date-filed" placeholder="mm">
                    <input type="text" class="date-filed" placeholder="yyyy">
                </div>

                <div class="cvc-filed-group">
                    <label>CVC</label><br>
                    <input type="password" class="cvc-filed" placeholder="xxx">
                </div>

                <div class="name-filed-group">
                    <label>Card Holder Name</label><br>
                    <input type="text" class="name-filed" placeholder="Full Name">
                </div>

                <button type="button" class="pay-btn">Pay Now</button>
            </div>
        </div>


    </div>

</body>
<!--Footer 01-->
<div class="fullfoot">
    <div class="footer3">
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
                <a href="ContactUs.html">
                    <li>Contact Us</li>
                </a>
                <a href="aboutus.html">
                    <li>About Us</li>
                </a>
                <a href="terms.html">
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




    <footer>
        <!--Footer 02-->
        <div class="footer2">
            Copyright &copy; 2019 Book My Train Co.- All rights Reserved
        </div>

    </footer>
</div>

</html>