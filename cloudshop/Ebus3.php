<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif;">
        
         <!-- Navbar from youtube video https://www.youtube.com/watch?v=FEmysQARWFU -->
        <header>
            
            <div>
               
               <img src="cirrus.png" alt="logo" style="width:130px;height:50px;" class="logo">
                
                <nav>
                    <ul>
                        <li><a href="cloudhome.html">Shop Home</a></li>
                    </ul>
                </nav>
        
            </div>
    
        </header>

        <br/>
        <br/>
        
        
        
        <div class="Info">
            
            <strong class="SubHeading">Receipt for you purchase.</strong>
            
            <br/>
            <br/>
            
            <?php
            //echo session variables
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            ?>
            
                
                    <?php
                     //echo session variables that were set on previous page
                    echo "Name: " . $_SESSION["name"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                    <?php
                    //echo session variables that were set on previous page
                    echo "Email: " . $_SESSION["email"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                     <?php
                     //echo session variables that were set on previous page
                      echo "Total Price: " . $_SESSION["total"];
                     ?>
                
                    
        </div>
        
     
      
    </body>
    
</html>    