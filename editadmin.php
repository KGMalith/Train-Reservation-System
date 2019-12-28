<?php
    include 'Server/config.php';


    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($db,$_GET['id']);
        $sql = "SELECT * FROM users WHERE userid='".$id."'";
        $resultset = mysqli_query($db,$sql);
        if($resultset){
            if(mysqli_num_rows($resultset)==1){
                $result = mysqli_fetch_assoc($resultset);
                $uname = $result['username'];
                $mail = $result['email'];

            }else{
                header("location: editadmin.php?error=nouser");
                exit();  
            }
        }else{
            header("location: editadmin.php?error=SQLError");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">

    <Title>
        Edit Admin    
    </Title>

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

    <div>

        <!--Form-->
        <div class="register">
            <div class="bar">
                <h4>Edit Admin</h4>
            </div>
            <br>
            <div>
                
            </div>
            <form action="Server/EditAdminServer.php" method="POST" id="form">

            
                <label>User Name</label><span style="color:red;"> * </span><br>
                <input type="text" name="uname" id="usrName" placeholder="Enter User Name" value="<?php echo $uname; ?>"><br><br>

                <label>Email ID</label><span style="color:red;"> * </span><br>
                <input type="email" name="email" id="email2" placeholder="Enter Your Email" value="<?php echo $mail; ?>"><br><br>

                <label>Password</label><br>
                <input type="password" name="password" id="pass" placeholder="Enter Your Password"><br><br>

                <label>Confirm Password</label><br>
                <input type="password" name="repassword" id="pass1" placeholder="Re-Enter Your Password"><br><br>

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <input type="submit" value="Submit" id="sub2"  name="edituser" onclick="myfunction();">
                <a href="admin.php"><button type="button"  id="reset3"> Back </button></a>

            </form>
        </div>

    </div>

    <!--JS-->
    <script>
        function myfunction() {
            var passw1 = document.getElementById('pass').value;
            var passw2 = document.getElementById('pass1').value;
            if(passw1 != passw2){
                alert("Confirm password doesn't match with password!");
            }
            a
        }
    </script> 


    <footer>
        <!--/Footer-->
        <!--Footer 01-->
        <div class="fullfooter1">
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