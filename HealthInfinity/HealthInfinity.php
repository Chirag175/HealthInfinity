<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Chirag Tamhane"/>
    <link rel="icon" type="image/gif" href="images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- Embeds the bootstrap CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Health Infinity</title>
</head>
<?php
    session_start();
    if(isset($_SESSION['email'])){
        $reg = '';
        $join = '
            <script>
                function gotoenq() {
                    alert("You have already signed up and logged in! Proceed to the Enquiry Form.");
                }
            </script>
            <div id="join_us" class="col-md-12">
                <h1 align="center" style="padding-top: 1.75%; font-size: 50px;">3 Simple Steps</h1>
                <h1 align="center" style="margin-top: -2.5%;">to avail a 10% discount on your Health Infinity Membership!</h1>
                <div class="row" style="padding: 3%; font-size: 24px; padding-top: 0%;">
                    <div class="col-md-4">
                        1. Sign up for a personal account on Health Infinity by clicking here : 
                        <button class="directSign" onclick="gotoenq()">
                            <a href="">SignUp</a>
                        </button>
                    </div>
                    <div class="col-md-4">
                        2. Login to your personal account by clicking here : 
                        <button class="directLog" onclick="gotoenq()">
                            <a href="">Login</a>
                        </button>
                    </div>
                    <div class="col-md-4">
                        3. Fill out the Enquiry form by clicking here : 
                        <button>
                            <a href="#enquiry">Enquire</a>
                        </button>
                    </div>
                </div>
            </div>
            ';
        $logout = '<a href="login.php">Logout'.' '.$_SESSION['fname'].' '.$_SESSION['lname'].'</a>';
        $enquiry =  '
                    <div class="parallax_4" id="enquiry">
                        <div style="text-align: left; padding-top: 5%; padding-left: 38.5%; padding-right: 37%;">
                            <div class="showHead" style="background-color: rgba(255, 255, 255, 0.85);">&nbspEnquiry</div>
                        </div>
                        <br>
                        <h1>Send us an enquiry & receive a call back within 48 hours!</h1>
                        <div class="form" style="text-align: justify; padding-top: 2.5%; padding-left: 25%; padding-right: 25%;">
                            <div>
                                <div id="signup">
                                    <form action="enquiry.php" method="post">
                                        <div class="top-row">
                                            <div class="field-wrap">
                                                <label style="color: #000; margin-top:-10px; transform: translateY(50px); left: 2px; font-size: 14px;">First Name</label>
                                                <input type="text" name="fname" id="fname" value="'.$_SESSION["fname"].'" readonly required/>
                                            </div>
                                            <div class="field-wrap" style="float: right;">
                                                <label style="color: #000; margin-top:-10px; transform: translateY(50px); left: 2px; font-size: 14px;">Last Name</label>
                                                <input type="text" name="lname" id="lname" value="'.$_SESSION["lname"].'" readonly required/>
                                            </div>
                                            <div class="field-wrap">
                                                <label style="color: #000; margin-top:-10px; transform: translateY(50px); left: 2px; font-size: 14px;">Phone Number</label>
                                                <input type="text" name="phone" id="phone" value="'.$_SESSION["phone"].'" readonly required/>
                                            </div>
                                            <div class="field-wrap" style="float: right;">
                                                <label style="color: #000; margin-top:-10px; transform: translateY(50px); left: 2px; font-size: 14px;">Email</label>
                                                <input type="email" name="email" id="email" value="'.$_SESSION["email"].'" readonly required/>
                                            </div>
                                            <textarea name="message" id="message" placeholder="Enter your message here..." class="feedback-input" required></textarea>
                                        </div>
                                        <div style="align: center; color: white; font-size: 20px; float: right; background-color: #1ab188;">
                                            10% Discount Availed!
                                            <input type="text" name="discount" id="discount" value="Yes - 10%" readonly hidden required/>
                                        </div>
                                        <button type="submit" class="button button-block">Reach Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
    }
    else{
        $reg = '
                <div class="parallax_4">
                    <br id="reg">
                    <div class="form" style="text-align: justify; padding-top: 2.5%; padding-left: 25%; padding-right: 25%;">
                        <ul class="tab-group">
                            <li class="tab active one"><a class="switch" href="#signup">Sign Up</a></li>
                            <li class="tab two"><a class="switch" href="#login">Login</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="signup">
                                <h1>Sign Up to create your personal account!</h1>
                                <form action="signup.php" method="post">
                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label>
                                                First Name <span class="req">*</span>
                                            </label>
                                            <input type="text" name="fname" id="fname" pattern="[A-Za-z]+" title="Please enter a proper first name!" required/>
                                        </div>
                                        <div class="field-wrap" style="float: right;">
                                            <label>
                                                Last Name <span class="req">*</span>
                                            </label>
                                            <input type="text" name="lname" id="lname" pattern="[A-Za-z]+" title="Please enter a proper last name!" required/>
                                        </div>
                                        <div class="field-wrap">
                                            <label>
                                                Phone Number <span class="req">*</span>
                                            </label>
                                            <input type="text" name="phone" id="phone" pattern="[6-9]{1}[0-9]{9}" title="Please enter a valid phone number" required/>
                                        </div>
                                        <div class="field-wrap" style="float: right;">
                                            <label>
                                                Email <span class="req">*</span>
                                            </label>
                                            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required/>
                                        </div>
                                        <div class="field-wrap">
                                            <label>
                                                Password <span class="req">*</span>
                                            </label>
                                            <input type="password" name="pass" id="pass" required/>
                                        </div>
                                        <div class="field-wrap" style="float: right;">
                                            <label>
                                                Confirm Password <span class="req">*</span>
                                            </label>
                                            <input type="password" name="cpass" id="cpass" required/>
                                        </div>
                                    </div>
                                    <button type="submit" class="button button-block">Get Started</button>
                                </form>
                            </div>
                            <div id="login">
                                <h1>Welcome Back!</h1>
                                <form action="login.php" method="post">
                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label>
                                                User Name / Last Name <span class="req">*</span>
                                            </label>
                                            <input type="text" name="uname" id="uname" required/>
                                        </div>
                                        <div class="field-wrap" style="float: right;">
                                            <label>
                                                Password <span class="req">*</span>
                                            </label>
                                            <input type="password" name="pass" id="pass" required/>
                                        </div>
                                    </div>
                                    <button type="submit" class="button button-block">Get Back Inside!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                ';
        $join = '
                <div id="join_us" class="col-md-12">
                    <h1 align="center" style="padding-top: 1.75%; font-size: 50px;">3 Simple Steps</h1>
                    <h1 align="center" style="margin-top: -2.5%;">to avail a 10% discount on your Health Infinity Membership!</h1>
                    <div class="row" style="padding: 3%; font-size: 24px; padding-top: 0%;">
                        <div class="col-md-4">
                            1. Sign up for a personal account on Health Infinity by clicking here : 
                            <button class="directSign" form="form" onclick="goTO()">
                                <a href="">SignUp</a>
                            </button>
                        </div>
                        <div class="col-md-4">
                            2. Login to your personal account by clicking here : 
                            <button class="directLog" form="form" onclick="goTO()">
                                <a href="">Login</a>
                            </button>
                        </div>
                        <div class="col-md-4">
                            3. Fill out the Enquiry form by clicking here : 
                            <button>
                                <a href="#enquiry">Enquire</a>
                            </button>
                        </div>
                    </div>
                </div>
                ';
        $logout = "";
        $enquiry =  '
                    <div class="parallax_4" id="enquiry">
                        <div style="text-align: left; padding-top: 5%; padding-left: 38.5%; padding-right: 37%;">
                            <div class="showHead" style="background-color: rgba(255, 255, 255, 0.85);">&nbspEnquiry</div>
                        </div>
                        <br>
                        <h1>Send us an enquiry & receive a call back within 48 hours!</h1>
                        <div class="form" style="text-align: justify; padding-top: 2.5%; padding-left: 25%; padding-right: 25%;">
                            <div>
                                <div id="signup">
                                    <form action="enquiry.php" method="post">
                                        <div class="top-row">
                                            <div class="field-wrap">
                                                <label>
                                                    First Name <span class="req">*</span>
                                                </label>
                                                <input type="text" name="fname" id="fname" pattern="[a-zA-Z]+" title="Please enter a proper first name!" required/>
                                            </div>
                                            <div class="field-wrap" style="float: right;">
                                                <label>
                                                    Last Name <span class="req">*</span>
                                                </label>
                                                <input type="text" name="lname" id="lname" pattern="[A-Za-z]+" title="Please enter a proper last name!" required/>
                                            </div>
                                            <div class="field-wrap">
                                                <label>
                                                    Phone Number <span class="req">*</span>
                                                </label>
                                                <input type="text" name="phone" id="phone" pattern="[6-9]{1}[0-9]{9}" title="Please enter a valid phone number" required/>
                                            </div>
                                            <div class="field-wrap" style="float: right;">
                                                <label>
                                                    Email <span class="req">*</span>
                                                </label>
                                                <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required/>
                                            </div>
                                            <textarea name="message" id="message" placeholder="Enter your message here..." class="feedback-input" required></textarea>
                                            <input type="text" name="discount" id="discount" value="No" readonly hidden required/>
                                        </div>
                                        <button type="submit" class="button button-block">Reach Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
    }
?>
<body class="parallax_1">
    <div class="sidenav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#facilities">Facilities</a>
        <a href="#join_us">Join Us</a>
        <?php echo $logout; ?>
    </div>
    <div id="home">
        <div style="text-align: left; padding-top: 10%; padding-left: 53%; padding-right: 5%;">
            <div class="showHead" style="background-color: rgba(255, 255, 255, 0.75);">&nbspHealth Infinity</div>
        </div>
        <br>
        <div style="text-align: right; padding-top: 0.25%; padding-left: 65%; padding-right: 5%;">
            <div class="showHead" style="font-size: 35px; background-color: rgba(255, 255, 255, 0.75);">Your secret to fitness&nbsp</div>
        </div>
        <br>
        <div style="text-align: left; padding-top: 26%; padding-left: 65%;">
            <div style="background-color: rgba(255, 255, 255, 0.9); opacity: 0;">
                <p style="font-size: 20px; padding-right: 5%;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <br>
        </div>
    </div>
    <div id="about" class="parallax_2">
        <div style="text-align: left; padding-top: 5%; padding-left: 67%; padding-right: 5%;">
            <div class="showHead" style="background-color: rgba(255, 255, 255, 0.85);">&nbspAbout Us</div>
        </div>
        <br>
        <div style="text-align: justify; padding-top: 0.25%; padding-left: 45%; padding-right: 5%;">
            <div class="showHead" style="font-size: 32px; background-color: rgba(255, 255, 255, 0.85); padding: 20px; padding-top: 5px; padding-bottom: 5px;">Health Infinity is not just a fitness centre, it's a brand associated with Health and Fitness for over two decades. With centres established in Melbourne, Sydney, Canberra and all over Australia, Good Health has never been more accessible.</div>
        </div>
    </div>
    <div id="facilities" class="parallax_3">
        <div style="text-align: left; padding-top: 5%; padding-left: 12.5%; padding-right: 61%;">
            <div class="showHead" style="background-color: rgba(255, 255, 255, 0.85);">&nbspFacilities</div>
        </div>
        <br>
        <div style="text-align: justify; padding-top: 0.25%; padding-left: 12.5%; padding-right: 37.5%;">
            <div class="showHead" style="font-size: 32px; background-color: rgba(255, 255, 255, 0.85); padding: 20px; padding-top: 5px; padding-bottom: 5px;">Health Infinity provides world-class training equipments from top brands like Cosco and Precor in an energetic yet serene environment to connect with your inner-self and train on the areas that matter to you! We also have highly skilled professional trainers to guide you towards your success in wellbeing.</div>
        </div>
    </div>
    <?php echo $join.$reg.$enquiry; ?>
    <div class="parallax_4 bottom"></div>
    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script> <!-- Embeds the jquery file -->
    <script src="js/custom.js"></script>
    <script>
        function goTO() {
            window.location.href = "#reg";
        }
    </script>
    <!-- /JS -->
</body>
</html>