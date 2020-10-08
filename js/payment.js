var pincode = document.getElementById('pincode'); 
var chkpinbtn = document.getElementById('chkpinbtn');

chkpinbtn.onclick = function () {
 
    var pin = pincode.value;

    if (pin == 560068) {
        alert("COD available");
    } 

    else {
        alert("Sorry! COD not yet available.")
    }
};