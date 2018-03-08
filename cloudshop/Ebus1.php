<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Select Product</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
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
         
       
        <!-- company shop -->
        <div class="shop ">
             <strong class="SubHeading">Select a Product</strong>
             
            
            <form method="POST" action="Ebus2.php">
            
                <label for="salesforce" style="float:left;padding-left:25%">
                    <input type="radio" id="salesforce" name="product" checked onClick="disabledbtnProceed()"/>
                    SalesForce @ $100
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="cloud9">
                    <input type="radio" id="cloud9" name="product" onClick="disabledbtnProceed()"/>
                    Cloud9 @ $200
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="aws">
                    <input type="radio" id="aws" name="product" onClick="disabledbtnProceed()"/>
                    Amazon Web Services @ $300
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disabledbtnProceed()"/>
                    Gmail @ $400
                </label>
            
                <br/>
                <br/>
                <br/>
            
                <label style="float:left;padding-left:25%" for="subtotal">
                    Sub Total
                </label>
                <input style="float:right; margin-right:35%; width:10%" type="text" id="subtotal" value="0.00" readonly/>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="discount">
                    Discount @ 5%
                </label>
                <input style="float:right; margin-right:35%; width:10%" type="text" id="discount"  value="0.00" readonly/>
                
                <br/>
                <br/>
                
                 <label style="float:left;padding-left:25%" for="vat">
                    VAT @ 10%
                </label>
                <input style="float:right; margin-right:35%;width:10%" type="text" id="vat" value="0.00" readonly/>
                
                 <br/>
                 <br/>
                 
                 <label style="float:left;padding-left:25%" for="total">
                    Total
                </label>
                <input style="float:right; margin-right:35%;width:10%" type="text" id="total" name="total" value="0.00" readonly/>
                
                <br/>
                <br/>
                <button style="float:left;margin-left:25%" class="btnNext" type="submit" id="btnProceed" disabled>Add to shopping cart</button> 
                
                <br/>
                <br/>
        
            </form>
            
            <br/>
            <br/>
            
            <div style="margin-right:7.5%">
                
                <button class="btnCost" onClick="calcSub()">Calculate Cost</button>
                <a style="padding-left:2%" class="btnClear" role="button" href="Ebus1.php">Clear Choice</a>  
                
            </div>
                
        </div>
        
    </body>
    
</html>