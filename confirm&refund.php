<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Confirm & Refund
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


    <div id="backb2">
        <h3 class="title1"><u>CONFIRM & REFUND</u></h3>

        <table id="refu">
            <tr>
                <th>Transaction ID</th>
                <th>From</th>
                <th>To</th>
                <th>Date Of Journey</th>
                <th>Full Tickets</th>
                <th>Half Tickets</th>
                <th>Total Price(Rs.)</th>
                <th>Refund Status</th>
            </tr>
            <tr>
                <td>002</td>
                <td>Colombo fort</td>
                <td>Galle</td>
                <td>2019.04.20</td>
                <td>01</td>
                <td>01</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                    <option value="Confirm">Confirm</option>
                    <option value="Remove">Remove</option>
                  </select></td>
            </tr>

            <tr>
                <td>097</td>
                <td>Colombo fort</td>
                <td>Kandy</td>
                <td>2019.6.02</td>
                <td>-</td>
                <td>01</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                        <option value="Confirm">Confirm</option>
                        <option value="Remove">Remove</option>
                      </select></td>
            </tr>

            <tr>
                <td>xxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxx.xx.xx</td>
                <td>xx</td>
                <td>xx</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                        <option value="Confirm">Confirm</option>
                        <option value="Remove">Remove</option>
                      </select></td>
            </tr>

            <tr>
                <td>xxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxx.xx.xx</td>
                <td>xx</td>
                <td>xx</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                            <option value="Confirm">Confirm</option>
                            <option value="Remove">Remove</option>
                          </select></td>
            </tr>

            <tr>
                <td>xxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxx.xx.xx</td>
                <td>xx</td>
                <td>xx</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                                <option value="Confirm">Confirm</option>
                                <option value="Remove">Remove</option>
                              </select></td>
            </tr>

            <tr>
                <td>xxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxx.xx.xx</td>
                <td>xx</td>
                <td>xx</td>
                <td>xxx</td>
                <td><select id="status" name="refund">
                                    <option value="Confirm">Confirm</option>
                                    <option value="Remove">Remove</option>
                                  </select></td>
            </tr>

        </table>

        </br>
        </br>
        <a href="admin.php"><button type="button" value="Back" id="backb"> Back</button></a>
        <button type="button" onclick="myFunction()" id="sub4">Refund </button>

    </div>


    <script>
        function myFunction() {
            alert("successfully!");
        }
    </script>

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