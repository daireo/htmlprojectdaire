<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!---jQuery--->
        <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" scr="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <h4>Select a product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id=salesforce name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $200
                </label>
                
                <br/>
                
                <label for="ans">
                 <input type="radio" id=ans name="product" checked onClick="disablebtnProceed()"/>
                 ANS @ $300
                 </label>
                 
                 <br/>
                 <br/>
                 
                 <label for="subtotal">
                     Sub Total
                     <input type="text" id="subtotal" value="0.00" readonly/>
                     </label>
                     
                     <br/>
                     
                 <label for="Total">
                     Total
                     <input type="text" id="Total" value="0.00" readonly/>
                     </label>
                     
                     <br/>
                     
                     <button type="Submit" id="btnProceed" disable>Add to Shopping Cart</button>
                     
                     </form>
                     
                     <br/>
                     <button onClick="calSub()">Calculate Cost</button>
                     <a role="button" href="Ebus1.php">Clear Choice</a><br>
                 <center><a href="https://htmlprojectdaire-daireo.c9users.io/homepage.html">Homepage</a></center>
    </body>
</html>