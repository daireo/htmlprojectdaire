/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if (document.getElementById('cloud9').checked){
      argSubTotal = 200;
    }
    else if (document.getElementById('aws').checked){
      argSubTotal = 300;
    }
    else{
      argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal);
}


function calcDisVatTotal(parmSubTotal){
  var subTotal = parmSubTotal;
  var discountAmt;
  var vatAmt;
  var totalPrice;

  discountAmt = (parmSubTotal * 0.05);
  
  vatAmt = ((parmSubTotal - discountAmt) * 0.1);
  
  totalPrice = ((parmSubTotal + vatAmt) - discountAmt);
  
  display(subTotal, discountAmt, vatAmt, totalPrice);
}


function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}


function rbChecked(){
  disablebtnProceed();
    
    /* Displays the picture of the selected radio button product */
    if(document.getElementById('salesforce').checked) {
      document.getElementById('pic_test').src='../Images/salesforce_logo.png';
    }
    else if (document.getElementById('cloud9').checked){
      document.getElementById('pic_test').src='../Images/cloud9_logo.png';
    }
    else if (document.getElementById('aws').checked){
      document.getElementById('pic_test').src='../Images/aws_logo.png';
    }
    else{
      document.getElementById('pic_test').src='../Images/gmail_logo.png';
    }
}