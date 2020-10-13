<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cart - PharmEazy | An Easier Pharmacy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <style>
    .row {
      margin: 10%;
      display: flex;
      justify-content: space-evenly;
    }

    .luxbar-item a:hover {
      color: green;
      background-color: honeydew;
      text-decoration: none;
    }

    .luxbar-brand i:hover {
      color: green;
    }

    .row h3 {
      display: flex;
      justify-content: space-evenly;
      padding-top: 15%;
    }

    .hov {
      transition: transform 0.2s;
    }

    .hov:hover {
      transform: scale(1.2);
    }

    .fa-university {
      font-size: 4em;
    }

    footer {
      background: black;
      color: white;
      height: 28em;
    }

    .info .foot {
      display: flex;
      justify-content: space-evenly;
    }

    .info .foot p {
      font-size: 2.5em;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 0.5em 1em;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 1.2em;
      margin: 1em 1em;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white; 
      color: black; 
      border: 0.2em solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50;
      color: white;
    }

    button:disabled,
    button[disabled]{
      border: 1px solid #999999;
      background-color: #cccccc;
      color: #666666;
    }

    .inputfile {
      width: 0.1px;
      height: 0.1px;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      z-index: -1;
    }

    .inputfile + label {
        border: 0.2em solid #f44336;
        padding: 0.2em;
        font-size: 1em;
        color: black;
        background-color: #e7e7e7;
        display: inline-block;
    }

    .inputfile:focus + label,
    .inputfile + label:hover {
        background-color: red;
        cursor: pointer;
    }

    input[type=number] {
      border: 2px solid #d87822;
      border-radius: 4px;
      width: 3em;
    }

    .container {
      position: relative;
      text-align: center;
      color: white;
    }
    
    .top-left {
      position: absolute;
      bottom: 8px;
      left: 8px;
      text-shadow: 4px 4px orangered;
      font-size: 4em;
    }

     body {
      font-family: sans-serif;
    }

  </style>
</head>
<script>
    function navvy()
    {
      var x="<?php echo (isset($_GET['id'])) ? $_GET['id'] : "null"; ?>";
      var y=document.getElementById('log');
      var z=document.getElementById('prof');
      if(x=="null")
      {
        y.style.display="block";
        z.style.display="none";
      }
      else
      {
        y.style.display="none";
        z.style.display="block";
      }
    }
    </script>
<body onload="navvy();">
  
<header id="luxbar" class="luxbar-fixed">
      <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox" />
      <div class="luxbar-menu luxbar-menu-right luxbar-menu-dark">
        <ul class="luxbar-navigation">
          <li class="luxbar-header">
            <a href="index.php" class="luxbar-brand"
              ><i
                class="fa fa-medkit"
                style="font-size: 2.5rem; padding: 0.5rem"
              ></i
            ></a>
            <label
              class="luxbar-hamburger luxbar-hamburger-doublespin"
              id="luxbar-hamburger"
              for="luxbar-checkbox"
            >
              <span></span>
            </label>
          </li>

          <li class="luxbar-item" style="text-align: center">
            <a href="index.php">Home</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a href="about.php">About Us</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a href="cata.php">Shop</a>
          </li>
          <li  id="log" class="luxbar-item" style="text-align: center">
            <a href="login.php">Login</a>
          </li>
          <li  id="prof" class="luxbar-item" style="text-align: center">
            <a href="accountinfo.php">My Profile</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a href="cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </header>
  <div class="container">
    <img src="assets/cart.png" alt="hi"
    style="width: 100%; height: 25em; margin-top: 2em;">
    <div class="top-left">My Cart</div>
  </div>


  <main style="margin-left: 1em; margin-top: 4em;">
    <div style="display:inline-block;vertical-align:top;">
     

      <div style="display: inline-block; vertical-align: top; ">
        <img src="assets/Paracetamol.jpg" alt="Paracetamol_image" width="100" height="100"
          style="margin: 0.5em 1em 2em 2em;" />
      </div>
      <div style="display: inline-block;">
        <div style="margin: 1em 0em 0em 3em; padding:1em; font-weight: bold;">Paracetamol (100mg) - ₹ 50</div>
        <div form class="quantity" action="" style="margin-left:4em; padding:0em;">
          <label for="quantity">Quantity: </label>
          <input type="number" onchange="calc()" onkeyup="calc()" name="quantity-2" id="paracetamolQuantity" value="1" min="1" max="10">
        </div form>
      </div>

      <br>
      <br>
      <br>
      <br>

      <div style="display:inline-block;vertical-align:top;">
        <img src="assets/burnol.jpg" alt="Burnol_image" width="100" height="100" style="margin: 0.5em 1em 2em 2em;" />
      </div>
      <div style="display:inline-block;">
        <div style="margin: 1em 0em 0em 3em; padding:1em; font-weight: bold;">Burnol (150g tube) - ₹ 30</div>
        <div form class="quantity" action="" style="margin-left:4em; padding:0em;">
          <label for="quantity">Quantity: </label>
          <input type="number" onchange="calc()" onkeyup="calc()" name="quantity-2" id="burnolQuantity" value="1" min="1" max="10">
        </div form>
      </div>


      <br>
      <br>
      <br>
      <br>

      <div style="display:inline-block;vertical-align:top;">
        <img src="assets/benadryl.jpg" alt="Benadryl_image" width="100" height="100"
          style="margin: 0.5em 1em 2em 2em;" />
      </div>
      <div style="display:inline-block;">
        <div style="margin: 1em 0em 0em 3em; padding:1em; font-weight: bold;">Benadryl Cough Syrup (for dry cough) - ₹ 100</div>
        <div form class="quantity" action="" style="margin-left:4em; padding:0em;">
          <label for="quantity">Quantity: </label>
          <input type="number" onchange="calc()" onkeyup="calc()" name="quantity-2" id="benadrylQuantity" value="1" min="1" max="10">
        </div form>
      </div>


      <br>
      <br>
      <br>
      <br>

      <div style="display:inline-block;vertical-align:top;">
        <img src="assets/digene.png" alt="Digene_image" width="100" height="100" style="margin: 0.5em 1em 2em 2em;" />
      </div>
      <div style="display:inline-block;">
        <div style="margin: 1em 0em 0em 3em; padding:1em; font-weight: bold;">Digene Tablets - ₹ 20</div>
        <div form class="quantity" action="" style="margin-left:4em; padding:0em;">
          <label for="quantity">Quantity: </label>
          <input type="number" onchange="calc()" onkeyup="calc()" name="quantity-2" id="digeneQuantity" value="1" min="1" max="10">
        </div form>
      </div>
      <br>
      <br>
      <br>
      <br>
      <p><b>Cart Total:</b></p>
      <p id="total"><b>₹ 200</b></p>
      <br>
      <br>
      <br>
      <h5 style="margin-left: 1em; font-family: sans-serif;">
        Please upload a scanned copy of your prescriptions:</h5>  
      <input name="presc_file" type="file" id="file" class="inputfile" 
        style="margin-left: 1em; margin-top: 1em; width: 15em;">
        <label for="file" style = "margin-left: 14em; margin-top: 2em;">Choose a file</label>
      <center><button type="button" disabled id="paymentButton" class="button button1" style="margin: 3em 2em 3em 3em;" 
       >Proceed to
          Payment</button></center>
    </div>

    <div style="display:inline-block; margin-left: 20em; margin-top: 10em;">
      <h3>Previously ordered by you:</h3>

      <div style="display: inline-block; vertical-align: top; font-weight: bold;">
        <img src="assets/allegram.jpg" alt="Allegra-M_image" width="100" height="100"
          style="margin: 0em 0.5em 0.5em 1em;" />
      </div>
      <div style="display: inline-block;">
        <div style="margin: 0.5em 0.5em 0.5em 3em; padding:1em;">Allegra M
          <p>Ordered on: 15/07/20</p>
        </div>
      </div>

      <br>
      <br>
      <div style="display: inline-block; vertical-align: top; ">
        <img src="assets/disprin.jpg" alt="Disprin_image" width="100" height="100"
          style="margin: 0em 0.5em 0.5em 1em;" />
      </div>
      <div style="display: inline-block;">
        <div style="margin: 0.5em 0.5em 0.5em 3em; padding:1em;">Disprin
          <p>Ordered on: 26/07/20</p>
        </div>
      </div>


    </div>

  </main>
  <footer class="pt-1">
    <div>
      <div class="row">
        <div class="col-md-6">
          <h5>About Us</h5>
          <p style="text-align: justify;">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
            accusamus suscipit, voluptas temporibus doloribus nesciunt tempore
            eligendi deserunt dignissimos officiis sed molestiae placeat
            fugiat cumque amet ipsam.
          </p>
        </div>

        <div class="col-md-3">
          <h5 class="pl-2">Information</h5>

          <ul class="pl-5">
            <li>
              <a href="#!">Terms and Conditions</a>
            </li>
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Customer Service</a>
            </li>
            <li>
              <a href="faq.html">FAQs</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Pharmacy Timings</h5>
          <p class="pl-3">Mon - Sat : 09:00AM - 10:00PM</p>
          <p class="pl-3">Sunday : 10:00AM - 10:00PM</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/cart.js"></script>
</body>

</html>
