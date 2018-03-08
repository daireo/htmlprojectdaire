<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Enter Details</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body style="font-family: Arial, Helvetica, sans-serif;">
        
         <!-- Nav Bar inspired by youtube video https://www.youtube.com/watch?v=FEmysQARWFU -->
        <header>
            
            <div>
               
               <img src="cirrus.png" alt="logo" style="width:135px;height:50px;" class="logo">
                
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
            <strong class="SubHeading">Please enter your payment details</strong>
            <br/>
            <br/>
                <form name="details" action="Ebus3.php" method="POST">

                    <label style="float:left" for="name">Name</label>
                    <input style="float:right;margin-right:55%" type="name" id="name" name="name" placeholder="Enter Your Full Name Here">
                    
                    <br/>
                    <br/>
                    
                    <label style="float:left" for="user_pin">PIN</label>
                    <input style="float:right;margin-right:55%" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br/>
                    <br/>
                    
                    <label style="float:left" for="email">E-mail</label>
                    <input style="float:right;margin-right:55%" type="email" id="email" name="email" placeholder="example@email.com">
                
                    <br/>
                    <br/>
                
                    <button class="btnNext" type="submit" id="btnPurchase" disabled>Proceed with purchase</button>
                
                </form>
                <br/>
                <br/>
                <button class="btnValidate" onClick="validateDetails()">Validate</button>
  
        </div>
        
                
    </body>

</html>