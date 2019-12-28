<?php include 'Server/config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Home
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


    <!--SlideShow-->
    <div class="slideshow-container">

        <div class="mySlides">

            <img src="img/Train1.jpg" style="width:100%">
        </div>

        <div class="mySlides">

            <img src="img/Train2.jpg" style="width:100%">
        </div>

        <div class="mySlides">

            <img src="img/Train3.jpg" style="width:100%">
        </div>

        <div class="mySlides">

            <img src="img/Train4.jpg" style="width:100%">
        </div>

    </div>

    <!--Form-->
    <div class="boxreserve">
        <div class="reserve1">
            <!--Topic-->
            <div class="reserv1">
                <h2>Reservation</h2>
            </div>
            <form action="Reservation2.php" method="POST" id="availability">

                <!--Start-->
                <label>Destination </label>
                <select name="start" id="first" required>
                    <?php
                        $sql =  mysqli_query($db,"SELECT stationName From stations");
                        while($row = mysqli_fetch_array($sql)){
                            echo "<option value='".$row['stationName']."'> ".$row['stationName']."</option> ";
                        }
                    ?>
                       
                </select> &nbsp;&nbsp;
                <label>To</label> &nbsp;&nbsp;
                <!--End-->

                <select name="End" id="secound" required>
                    <?php
                        $sql =  mysqli_query($db,"SELECT stationName From stations");
                        while($row = mysqli_fetch_array($sql)){
                            echo "<option value='".$row['stationName']."'> ".$row['stationName']."</option> ";
                        }
                    ?>
                    
                </select>
                <br><br>

                <!--Date-->
                <label>Date Of Your Reservation </label>
                <input type="date" name="date" id="date" required><br><br>


                <!--Submit & Reset Buttons-->
                <input id="sub" name="submit" type="submit" value="Submit">
                <input id="res" type="reset" value="Reset">

            </form>
        </div>
    </div>
    


    <div id="but">
        <a href="findnewlocations.php"><button type="button"  class="button2"> Find New Location</button></a>
    </div>

    <!--Places-->
    <div id="box4">

        <div class="nuwaraeliya">
            <img src="Img/Nuwara eliya.jpg">
            <p>This image is about...</p>
            <pre>        <a href="https://en.wikipedia.org/wiki/Nuwara_Eliya">Read more</a></pre>
        </div>


        <div class="kandy">
            <img src="Img/Kandy.jpg">
            <p>This image is about...</p>
            <pre>        <a href="https://en.wikipedia.org/wiki/Kandy">Read more</a></pre>
        </div>



        <div class="ella">
            <img src="Img/ella.jpg">
            <p>This image is about...</p>
            <pre>       <a href="https://en.wikipedia.org/wiki/Ella,_Sri_Lanka">Read more</a></pre>
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











    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 4 seconds
        }
    </script>

</body>
<footer>
    <!--Footer 02-->
    <div class="footer2">
        Copyright &copy; 2019 Book My Train Co.- All rights Reserved
    </div>

</footer>

</html>