 var paracetamolPrice = 50;
 var benadrylPrice = 100;
 var burnolPrice = 30;
 var digenePrice = 20;
 var total = 0;

 function calc() {
    var paracetamolQuantity = document.getElementById("paracetamolQuantity").value;
    var benadrylQuantity = document.getElementById("benadrylQuantity").value;
    var burnolQuantity = document.getElementById("burnolQuantity").value;
    var digeneQuantity = document.getElementById("digeneQuantity").value;

    total = paracetamolPrice*paracetamolQuantity + benadrylPrice*benadrylQuantity + burnolPrice*burnolQuantity
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
		 alert("You can now proceed");
		 paymentButton.disabled = false;
		 selected = true;
	 } 
 };

 var paracetamolQuantity = document.getElementById("paracetamolQuantity").value;
 var benadrylQuantity = document.getElementById("benadrylQuantity").value;
 var burnolQuantity = document.getElementById("burnolQuantity").value;
 var digeneQuantity = document.getElementById("digeneQuantity").value;
 total = paracetamolPrice*paracetamolQuantity + benadrylPrice*benadrylQuantity + burnolPrice*burnolQuantity
                    + digenePrice*digeneQuantity;

 paymentButton.onclick = function () {
	 if (!selected) {
		 alert("Please select a file first!");
	 }
	 else {
		window.location.href = 'paymentinfo.php?amt=' + total;
	 }
 };
