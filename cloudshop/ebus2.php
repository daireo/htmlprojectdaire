<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="shop_navbar.css" type="text/css"/>
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        
        <!-- Setting the webpage font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        
        <!-- setting webpage favicon -->
        <link rel="shortcut icon" type="image/ico" href="Images/favicon.ico">
        
        <!-- Google icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    
    <body>
        <!-- Adding navigation bar to the page -->
        <header>
            <div class="container">
                
                <img class="logo" src="../Images/company_logo_trans.png">
                
                <nav>
                    <ul>
                        <li><a href="shophome.html">Shop Home</a></li>
                        <li><a href="about_cloud.html">About Cloud</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="../homepage.html">Personal Website</a></li>
                    </ul>
                </nav>
                
            </div>
        </header>
        
        <!-- Adding content to the page -->
        <div class="ebus_content">
            <h1 class="ebus2_heading">Please enter your payment details</h1>
            
            <form action="Ebus3.php" method="POST">
                
                <label for="user_name" class="lbl_name">
                    Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
                </label>
                
                <br>
                
                <label for="user_email" class="lbl_email">
                    Email Address 
                    <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com">
                </label>
                
                <br>
    
                <label for="user_pin" class="lbl_pin">
                    PIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="pin" id="user_pin" name="user_pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                    <br>
                    (Only numbers are allowed for the PIN)
                </label>
                
                <br>
                <br>
                
                <button class="btn_proceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br>
            
            <button class="btn_validate" onClick="validateName()">Validate</button>
            
            <a class="return_btn" role="button" href="Ebus1.php"><i class="material-icons">keyboard_arrow_left</i>Return</a>
        
            <?php  
            // Set session variables
              $_SESSION["total"] = $_POST["total"];
            ?>
        </div>
        
    </body>
</html>