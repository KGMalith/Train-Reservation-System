<?php include("Server/config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Remove Promotions
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
        <h3 class="title1"> <u>REMOVE PROMOTIONS</u> </h3>

        <table id="removepromotable">
            <tr>

                <th>Promotion Name</th>
                <th>Title</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Description</th>
                <th>Remove</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `promotion`";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($result)){
                $id = $row['pid'];
                $name = $row['pname'];
                $title = $row['title'];
                $start = $row['promostart'];
                $end = $row['promoend'];
                $des = $row['description'];
            ?>

                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $title ?></td>
                    <td><?php echo $start ?></td>
                    <td><?php echo $end ?></td>
                    <td><?php echo $des ?></td>
                    <td>
                        <a href="Server/removepromoserver.php?id=<?php echo $id; ?>"> Remove </a>
                    </td>
                </tr>
               <?php
            }
            ?> 
        </table>
        <br>
        <br>

        <a href="admin.php"><button type="button" value="Back" id="bbutton2"> Back</button></a>
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
                <a href="#">
                    <li>Contact Us</li>
                </a>
                <a href="#">
                    <li>About Us</li>
                </a>
                <a href="#">
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