<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title></title>

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



    <div id="backb2">
        <h3><u>Booking Cancellation</u></h3>
        <table id="table3">
            <tr>
                <th> Transaction </th>
                <th> From </th>
                <th> To </th>
                <th> Date Of Journey </th>
                <th> Full Tickets </th>
                <th> Half Tickets </th>
                <th> Total Price(Rs) </th>
                <th> Status </th>
                <th> Cancellation </th>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <input type="text" name="fulltickets" list="fulllist" class="list">
                    <datalist id="fulllist">
                    <option value="1">
                            <option value="2">
                                    <option value="3">
                    </datalist> </td>
                <td> <input type="text" name="fulltickets" list="fulllist" class="list">
                    <datalist id="fulllist">
                    <option value="1">
                            <option value="2">
                                    <option value="3">
                    </datalist> </td>
                <td> </td>
                <td> </td>
                <td> <input type="button" value="cancel" onclick="cancelBook()" class="can1"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td><input type="text" name="fulltickets" list="fulllist" class="list">
                    <datalist id="fulllist">
                    <option value="1">
                            <option value="2">
                                    <option value="3">
                    </datalist> </td>
                <td> <input type="text" name="fulltickets" list="fulllist" class="list">
                    <datalist id="fulllist">
                    <option value="1">
                            <option value="2">
                                    <option value="3">
                    </datalist> </td>
                <td> </td>
                <td> </td>
                <td> <input type="button" value="cancel" onclick="cancelBook()" class="can1"> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>



        <a href="userpanel.php"><input type="button" value="Back" class="back1"></a>
        <input type="submit" value="Confirm" class="submit01">
    </div>
    </br>
    </br>




    <p id="demo"></p>

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