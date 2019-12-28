<?php require 'Server/RegisterServer.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">

    <Title>
        Register
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
                <h4>Register Here</h4>
            </div>
            <br>
            <div>
                <span> 
                    <?php include 'errors.php'; ?>
                </span>
            </div>
            <form action="Register.php" method="POST" id="form">

            
                <label>User Name</label><span style="color:red;"> * </span><br>
                <input type="text" name="uname" id="usrName" placeholder="Enter User Name" value="<?php echo $username; ?>"><br><br>

                <label>First Name</label><span style="color:red;"> * </span><br>
                <input type="text" name="fname" id="fiName" placeholder="Enter First Name" value="<?php echo $fname; ?>"><br><br>

                <label>Last Name</label><span style="color:red;"> * </span><br>
                <input type="text" name="lname" id="laname" placeholder="Enter Last Name" value="<?php echo $lname; ?>"><br><br>

                <label>Gender</label><span style="color:red;"> * </span><br>
                <select name="gender" id="gend">
                    <option value="<?php echo $gender;  ?>" ><?php echo $gender; ?></option>
                   <option value="choice">--GENDER--</option>
                   <option value="male">MALE</option>
                   <option value="female">FEMALE</option>
               </select><br><br>

                <label>Date Of Birth</label><br>
                <input type="date" name="bday" id="birthday" value="<?php echo $birthday; ?>"> <br><br>

                <label>Email ID</label><span style="color:red;"> * </span><br>
                <input type="email" name="email" id="email2" placeholder="Enter Your Email" value="<?php echo $email; ?>"><br><br>

                <label>Nationality</label><br>
                <input type="text" name="nationality" id="nation" placeholder="Enter Your Nationality" value="<?php echo $nationality; ?>"><br><br>

                <label>Residential Address</label><br>
                <input type="text" name="address" id="readdress" placeholder="Enter Your Residental Address" value="<?php echo $address; ?>"> <br><br>

                <label>Mobile Number</label><span style="color:red;"> * </span><br>
                <input type="text" name="mnumber" id="mobinumber" placeholder="Enter Your Mobile Number" value="<?php echo $phone; ?>"><br><br>

                <label>Password</label><span style="color:red;"> * </span><br>
                <input type="password" name="password" id="pass" placeholder="Enter Your Password"><br><br>

                <label>Confirm Password</label><br>
                <input type="password" name="repassword" id="pass1" placeholder="Re-Enter Your Password"><br><br>


                <div class="check">
                    <input type="checkbox" name="chkcon"> I accept the <a href="#">Terms & Conditions</a>
                </div>


                <input type="submit" value="Submit" id="sub2"  name="signup" onclick="myfunction();">
                <button type="reset" value="reset" id="reset3"> Reset </button>

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