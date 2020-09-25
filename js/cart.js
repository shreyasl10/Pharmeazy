 var paracetamolPrice = 50;
 var benadrylPrice = 100;
 var burnolPrice = 30;
 var digenePrice = 20;

 function calc() {
    var paracetamolQuantity = document.getElementById("paracetamolQuantity").value;
    var benadrylQuantity = document.getElementById("benadrylQuantity").value;
    var burnolQuantity = document.getElementById("burnolQuantity").value;
    var digeneQuantity = document.getElementById("digeneQuantity").value;

    var total = paracetamolPrice*paracetamolQuantity + benadrylPrice*benadrylQuantity + burnolPrice*burnolQuantity
                    + digenePrice*digeneQuantity;
    amount = "₹ ".concat(total);
    document.getElementById("total").innerHTML = amount.bold();
 }
 

 var fileInput = document.getElementById('file');
 var paymentButton = document.getElementById("paymentButton");
 var selected = false;

 fileInput.onchange = function () {
 
	 var input = this.files[0];
 
	 if (input) {
		 //process input.
		 alert("You can now proceed");
		 paymentButton.disabled = false;
		 selected = true;
	 } 
 };


 paymentButton.onclick = function () {
	 if (!selected) {
		 alert("Please select a file first!");
	 }
	 else {
		window.location.href = 'paymentinfo.html';
	 }
 };