<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src='js/jquery.js'></script>
    <script src='js/config.js' defer></script>
    <script src='js/main.js'></script>
    <title>Homepage</title>
</head>
<body>

    <!-- Background Img -->
    <div id='brimg' class="box">
        <img  src="img/background-img.png" alt="">
    </div>



    <!-- Nav Section -->
    <nav>
        <!-- img section -->
        <div id='nav-items-left' class="box x-center y-center" style="width:30%">
            <img id='logo' src="" alt="" >
        </div>
        <!-- action section -->
        <div id="nav-items-right" class="box" style="width:65%;">
            <div class="box y-center" style="margin-left: 30px;">
                <img src="img/customer.svg" alt="" style="margin-right: 10px;">
                <h3>Customer</h3>
            </div>

            <div class="box y-center" style="margin-left: 30px;">
                <img src="img/merchant.svg" alt="" style="margin-right: 10px;">
                <h3>Merchant</h3>
            </div>

            <div class="box y-center" style="margin-left: 30px;">
                <img src="img/courier.svg" alt="" style="margin-right: 10px;">
                <h3>Courier</h3>
            </div>
        </div>
    </nav>

    <!-- Body Section -->

    <section class="body" style="width:100%;height: 600px;color:white;align-items: center;">
        <div class="box" style="width:50%;height: 300px;justify-content: center;align-items: center;">
            <div class="box column">
                <h1 style="font-size:52px;">TIRED OF GOING OUT?</h1>
                <p style="font-size:18px">Do you want something to eat but you are far from food outlet?</p>
                <p style="font-size:18px">Don't worry I got you!</p>
                <img src="/img/logo-2.svg" alt="" style="width:35%;margin-top:30px;">
            </div>
        </div>

        <div class="box" style="width:50%;">
            <!-- Form Container -->
            <form id='form' class="box column" style="padding:5%;background-color: rgba(24, 130, 156, .40);width:80%;height: auto;">
                <div class="box y-center" style="margin-bottom: 20px;">
                    <img src="img/customer.svg" alt="" style="width:50px;margin-right:10px;">
                    <h2>Sign Up</h2>
                </div>
                <div class="box">
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>First Name</p>
                        <input type="text" required>
                    </div>
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>Last Name</p>
                        <input type="text" >
                    </div>
                </div>
                <div class="box">
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>Email</p>
                        <input type="text">
                    </div>
                    <div class="box column" style="width:23%;margin-right: 2%;">
                        <p>Age</p>
                        <input type="text">
                    </div>
                    <div class="box column" style="width:23%;margin-right: 2%;">
                        <p>Birthdate</p>
                        <input type="text" >
                    </div>
                </div>
                <div class="box">
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>Cell Number</p>
                        <input type="text">
                    </div>
                    <div class="box column" style="width:23%;margin-right: 2%;">
                        <p>Gender</p>
                        <input type="text">
                    </div>
                    <div class="box column" style="width:23%;margin-right: 2%;">
                        <p>Nationality</p>
                        <input type="text" >
                    </div>
                </div>
                <div class="box">
                    <div class="box column" style="width:98%;margin-right: 2%;">
                        <p>Complete Address</p>
                        <input type="text" >
                    </div>
                </div>
                <div class="box">
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>Barangay</p>
                        <input type="text" >
                    </div>
                    <div class="box column" style="width:48%;margin-right: 2%;">
                        <p>City</p>
                        <input type="text" >
                    </div>
                </div>
                <div class="box" style="margin-top:20px;justify-content:flex-end;margin-right:2%">
                    <buttons style="border-style:none;background-color:rgba(0,0,0,0);cursor: pointer;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Login</button>
                </div>
                
            </form>
        </div>
    </section>


    <!-- Footer Section -->
    <footer>
        <!-- other details -->
        <div id="footer-details" class="box column" style="width:30%">
            <img src="img/logo-2.svg" alt="" style="width:150px;margin-bottom:10px;">
            <p style="margin-bottom:10px;font-size: 15px;" class="bold">Help your near community</p>
            <p style="margin-bottom:10px;">Dummy Street, Cabuyao City Province of Laguna</p>
            <p style="margin-bottom:10px;">Follow us! on our social media accounts</p>
            <div id="footer-icons" class="box">
                <img src="img/fb.svg" alt="">
                <img src="img/instagram.svg" alt="">
                <img src="img/twitter.svg" alt="">
            </div>
        </div>
        <!-- quick links -->
        <div id="quicklinks" class="box" style="width:70%;justify-content: space-evenly;">
            <div class="box column">
                <h5>About</h5>
                <p>Brand Story</p>
                <p>Location</p>
                <p>Careers</p>
            </div>

            <div class="box column">
                <h5>What's new</h5>
                <p>How to order</p>
                <p>How to refund</p>
                <p>Top up</p>
                <p>Promotions</p>
            </div>

            <div class="box column">
                <h5>What's new</h5>
                <p>Financial</p>
                <p>Grow Business</p>
                <p>Cash Out</p>
                <p>Promotions</p>
            </div>

            <div class="box column">
                <h5>What's new</h5>
                <p>Financial</p>
                <p>Perks</p>
                <p>Cash Out</p>
                <p>Promotions</p>
            </div>
        </div>

    </footer>


    
    
</body>
</html>
