/* global $ */

//Function to validate details
function validateDetails(){
    
    // declaring and assigning values to variables 
    var pin = document.getElementById("user_pin").value;
    var name = document.forms["details"]["name"].value;
    var email = document.forms["details"]["email"].value;
    
    //If statement to validate details
    if(pin == ""){
        disablebtnPurchase();
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        disablebtnPurchase();
        alert("Please ensure your PIN is 4 digits long");
        
    }
    
    else if(name == ""){
        alert("Please enter your name");
        return false;
   
    }
    
    else if(email == ""){
        alert("Please enter your email");
        return false;
    }
    
    else{
        enablebtnPurchase();
        return true;
    }  // end of if 
    
} //end of function
  

// function to enable next button
function enablebtnPurchase (){
    
    $('#btnPurchase').prop('disabled', false);
    
}    //end of function

// fucntion to disable next button 
function disablebtnPurchase() {
    
    $('#btnPurchase').prop('disabled', true);
    
}    //end of function