<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
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
            <h1 class="ebus3_heading">Purchase Receipt</h1>
            
            <?php  
            // Set session variables
              $_SESSION["user_name"] = $_POST["user_name"];
              $_SESSION["user_email"] = $_POST["user_email"];
            ?>
            
            <p class="ebus3_name">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Username: " . $_SESSION["user_name"] . ".";
                ?>
            </p>
            
            <p class="ebus3_email">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Email: " . $_SESSION["user_email"] . ".";
                ?>
            </p>
            
            <p class="ebus3_total">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Total: " . $_SESSION["total"] . ".";
                ?>
            </p>
            
            <br>
            
            <h3 class="ebus3_heading2">Thanks you for your purchase!</h3>
            
            <br>
            
            <p class="ebus3_message">
                Our Software team will be in contact with you shortly to assist you in setting up your software package.
                
                <br>
                <br>
                
                In the meantime, you should have received an email from us detailing the next steps for you to take on our journey 
                in the cloud computing world! Why not take a look? If you have not received an email then contact us on the number below.
            </p>
            
            <a class="home_btn" role="button" href="shophome.html">Home</a>
        </div>
    </body>
</html>
