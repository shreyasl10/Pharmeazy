<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Payment Options - PharmEazy | An Easier Pharmacy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
  <style>
    body,
    html {
      margin-top: 2.5rem;
      font-family: 'Poppins';
    }

    .luxbar-item a:hover {
      color: green;
      background-color: honeydew;
      text-decoration: none;
    }

    .luxbar-brand i:hover {
      color: green;
    }

    .row {
      margin: 10%;
      display: flex;
      justify-content: space-evenly;
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
      height: 450px;
    }

    .info .foot {
      display: flex;
      justify-content: space-evenly;
    }

    .info .foot p {
      font-size: 15px;
    }

    input[type=number] {
      border: 2px solid #d87822;
      border-radius: 4px;
      width: 7em;
      height: 2em;
    }

    input[type=submit] {
      border: 2px solid #d87822;
      border-radius: 4px;
      width: 10em;
    }

    input[type=submit].btn:hover {
      background-color:#d87822;
      color: white;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 20px;
      text-align: center;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 50%;
      transition-duration: 0.4s;
    }

    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50; /* Green */
      color: white;
    }

    .container {
      position: relative;
      text-align: center;
      color: white;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 4em;
      text-shadow: 2px 2px #000000;
    }

    body {
      font-family: 'Helvetica', 'Arial', sans-serif;
    }

  </style>
  <script>
    function navvy()
    {
      var x="<?php echo (isset($_GET['id'])) ? $_GET['id'] : "null"; ?>";
      var y=document.getElementById('log');
      var z=document.getElementById('prof');
      var tags=document.getElementsByClassName('my');
      if(x=="null")
      {
        y.style.display="block";
        z.style.display="none";
      }
      else
      {
        y.style.display="none";
        z.style.display="block";
        for(i=0;i<tags.length;i++)
        {
          var j=tags[i].href;
          console.log(j);
          tags[i].href=j+"?id="+x;
        }
      }
    }
    </script>
</head>

<body onload="navvy()">
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
            <a class="my" href="index.php">Home</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my" href="about.php">About Us</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my" href="cata.php">Shop</a>
          </li>
          <li  id="log" class="luxbar-item" style="text-align: center">
            <a class="my" href="login.php">Login</a>
          </li>
          <li  id="prof" class="luxbar-item" style="text-align: center">
            <a class="my" href="accountinfo.php">My Profile</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my" href="cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </header>

  <div class="container">
    <img src="assets/payment.jpeg" alt="hi"
    style="width: 100%; height: 25em">
    <div class="centered">Payment Portal</div>
  </div>

  <div style="text-align: center; font-size: larger;">
    <p>Your order total is: <b>₹ <?php echo $_GET['amt'];
     ?> </b></p>
    <p>Please note that COD is available in selected regions only.</p>
    <p>Kindly enter your pincode to check its availaility</p>

    <form action="">
      <label for="quantity">PIN code:</label>
      <input type="number" id="pincode" name="pincode" min="000000" max="999999" />
      <input type="submit" id="chkpinbtn" class="btn" value="Check availability" />
    </form>
    <br>
    <p>Please choose your desired payment option:</p>
    <br>

    <input type="radio" id="cod" name="paymentOption" value="cod" style="margin-left: 0px;" />
    <label style="color: #fe325a;" for="cod">COD (Cash on Delivery)</label><br />
    <input type="radio" id="netbanking" name="paymentOption" value="netbanking" style="margin-left: -58px;" />
    <label style="color: #fe325a;" for="netbanking">Internet Banking</label><br />
    <input type="radio" id="card" name="paymentOption" value="card" style="margin-left: -50px;" />
    <label style="color: #fe325a;" for="card">Credit/Debit Card</label>

    <br />

    <?php
        if(array_key_exists('button1', $_POST)) { 
          include_once('config.php');
          $curr_email = $_GET['id'];
          $sql = "DELETE FROM cart WHERE email='$curr_email'";
          $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
          header("Location: http://localhost/Pharmeazy/cata.php?id=$curr_email", true, 301);
        }  
    ?> 
    <br>
    <center>
      <form method="post"> 
          <input type="submit" name="button1"
          class="button button1" value="Pay" style="border: 2px solid #4CAF50; border-radius: 50%;"/> 
      </form> 
    </center>
    <br>
    <p>
     <img src="assets/caution.png" style="height: 5em;"> <b>Merely making the payment does not guarantees the
      fulfillment of your order. You need to have the correct prescription
      uploaded. </b>
    </p>
    <p>
      Before you click on the Pay button and place your order, we encourage
      you to read our <a href="">Terms & Conditions</a> and
      <a href="faq.html">FAQs</a>.
    </p>
    <p>You will receive a confirmation email after you place the order.</p>
    <p>Thank you for shopping with us!</p>
  </div>

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
              <a href="terms_and_conditions.html">Terms and Conditions</a>
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

  <script src="js/payment.js"></script>
</body>

</html>
