<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Refund Details
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


    <div id="box5">
        <h3>Refund Details</h3>

        <table id="table3">
            <tr>
                <th>Transaction Id</th>
                <th>From</th>
                <th>To</th>
                <th>Date of Jurney</th>
                <th>Full Ticket</th>
                <th>Half Ticket</th>
                <th>Total Price($)</th>
                <th>Refound Status</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Colombo-Fort</td>
                <td>Vauniya</td>
                <td>2019.01.20</td>
                <td>4</td>
                <td>2</td>
                <td>50</td>
                <td>Pending</td>
            </tr>

            <tr>
                <td>002</td>
                <td>Colombo-Fort</td>
                <td>Galle</td>
                <td>2019.02.29</td>
                <td>3</td>
                <td>2</td>
                <td>20</td>
                <td>Refounded</td>
            </tr>

            <tr>
                <td>003</td>
                <td>Colombo-Fort</td>
                <td>Kandy</td>
                <td>2019.03.20</td>
                <td>4</td>
                <td>2</td>
                <td>60</td>
                <td>Pending</td>
            </tr>

            <tr>
                <td>004</td>
                <td>Colombo-Fort</td>
                <td>Mathara</td>
                <td>2019.03.29</td>
                <td>4</td>
                <td>0</td>
                <td>70</td>
                <td>Refounded</td>
            </tr>

        </table>
        <a href="userpanel.php"><input type="button" value="Back" class="back2"></a>
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