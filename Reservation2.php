<?php
    include 'Server/config.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/style.css">

        <Title>
            Reservation2
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
            </div>
        </div>

        <div id="box5">
            <!--Topic-->
            <div class="retopic2">
                <h3><u>Availability Result</u></h3>
            </div>
            <br/>
            <table id="table3">
                <!--Table-->
                <tr>
                    <th>Train Name</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            <?php
                if(isset($_POST['submit'])){

                    $start = mysqli_real_escape_string($db,$_POST['start']);
                    $end = mysqli_real_escape_string($db,$_POST['End']);
                    $date = mysqli_real_escape_string($db,$_POST['date']);
            
                    if(empty($start) || empty($end)|| empty($date)){
                        header("location: Reservation.php?error=emptyFields");
                        exit();
                    }
            
                    if($start == $end){
                        header("location: Reservation.php?error=samedes");
                        exit();
                    }
            

                    $sql = "SELECT * FROM trains WHERE trainStart ='$start' AND trainEnd='$end'";
                    $resultset = mysqli_query($db,$sql);
                    if($resultset){
                        while($result = mysqli_fetch_assoc($resultset)){
                            $id = $result['trainid'];
                            $tname = $result['trainName'];
                            $tstart = $result['trainStart'];
                            $tend = $result['trainEnd'];
                            $tstime = $result['trainStratTime'];
                            $tetime = $result['trainEndTime'];
                            $tprice = $result['tprice'];
                        
            ?>
                    <tr>
                        <td><?php echo $tname; ?></td>
                        <td><?php echo $tstart; ?></td>
                        <td><?php echo $tend; ?></td>
                        <td><?php echo $tstime; ?></td>
                        <td><?php echo $tetime ; ?></td>
                        <td><?php echo $tprice; ?></td>
                        <td><a href="Server/book.php?id=<?php echo $id ;?>"> Book </a></td>
                    </tr>

            <?php
                    }
                }else{
                header("location: Reservation.php?error=samedes");
                exit(); 
            }
        }
            ?>
            </table>
            
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