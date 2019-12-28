<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Add promotion & Discount
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


    <div>
        <!--Topic-->
        <div id="box">
            <div class="retopic">
                <h2>Add Promotions</h2>
            </div><br><br>

            <form id="a" name="myform" action="Server/AddNewPromo.php" method="POST">
                <label> Promotion / Discount Name  </label>
                <input type="text" name="pname" id="pname"></br>
                </br>
        
                <label> Title  </label>
                <input type="text" name="title" id="ptitle"></br>
                </br>
                <label> Validity  </label>
                <input type="date" name="promostart" id="sdate">
                <label> to </label>
                <input type="date" name="promoend" id="edate"></br>
                </br>

                <label> Discription  </label><br>
                <textarea name="description" rows="10" cols="30" placeholder="Write discription..." id="pdes"></textarea></br><br>
                </br>
                </br>


                <a href="admin.php"> <button type="button" id="bbutton">Back</button> </a>
                <button type="submit" id="conf" name="addpromo"> Confirm </button>

            </form>
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
</body>


<footer>
    <!--Footer 02-->
    <div class="footer2">
        Copyright &copy; 2019 Book My Train Co.- All rights Reserved
    </div>

</footer>



</html>