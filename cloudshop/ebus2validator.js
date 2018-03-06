/* global $ */

// I obtained this name validation on: https://stackoverflow.com/questions/17899107/validate-name-field-in-javascript
function validateName(){
    
    var name;
    
    name = document.getElementById("user_name").value;

    if (name.match(/^[a-zA-Z_ ]+$/)){
        validateEmail();
    }
    else{
        alert("Please enter a valid name.")
    }

}

function validateEmail(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("please enter an email.")
    }
    else if (validateInputEmail(email) == false){
        alert("Please enter a valid Email ID");
    }
    else{
        validatePin();
    }
}

function validatePin(){
    
var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN.");
    }
    else if (pin.length < 4){
        alert("Your PIN must be 4 digits.");
    }
    else{
        alert("All your details are valid.")
        enablebtnPurchase()
    }
}

// I obtained this email validation on: https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
function validateInputEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    
function enablebtnPurchase(){
    
    $('#btnPurchase').prop('disabled', false);
    }
    
function disablebtnPurchase() {
    
    $('#btnPurchase').prop('disabled', true);
    }
    
    