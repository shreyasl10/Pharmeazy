<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel = "icon" href =  
"assets/hospital.png"
        type = "image/x-icon"> 
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
      var tags=document.getElementsByClassName('my');
      var t1=document.getElementsByClassName('shop');
      var t2=document.getElementsByClassName('sho');
      var s1=t2[0].href;
      var i,j;
      var s;
      s=t1[0].href;
      if(x=="null")
      {
        y.style.display="block";
        z.style.display="none";
        for(j=0;j<t1.length;j++)
        {
          t1[j].href='login.php';
        }
        for(j=0;j<t2.length;j++)
        {
          t2[j].href='login.php';
        }
      }
      else
      {
        for(j=0;j<t1.length;j++)
        {
          t1[j].href=s;
        }
        for(j=0;j<t2.length;j++)
        {
          t2[j].href=s1;
        }
        y.style.display="none";
        z.style.display="block";
        for(i=0;i<tags.length;i++)
        {
          var j=tags[i].href;
          tags[i].href=j+"?id="+x;
        }
      }
    }
    </script>
<body onload="navvy();">
<?php
  include('php/check.php');
  ?>
<header id="luxbar" class="luxbar-fixed">
      <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox" />
      <div class="luxbar-menu luxbar-menu-right luxbar-menu-dark">
        <ul class="luxbar-navigation">
          <li class="luxbar-header">
            <a href="index.php" class="luxbar-brand my"
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
            <a class="my shop" href="cata.php">Shop</a>
          </li>
          <li  id="log" class="luxbar-item" style="text-align: center">
            <a class="my" href="login.php">Login</a>
          </li>
          <li  id="prof" class="luxbar-item" style="text-align: center">
            <a class="my" href="accountinfo.php">My Profile</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my sho" href="cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </header>
  <div class="container">
    <img src="assets/cart.png" alt="hi"
    style="width: 100%; height: 25em; margin-top: 2em;">
    <div class="top-left">My Cart</div>
  </div>
  <br>

  <main style="margin-left: 1em; margin-top: 4em;">
    <div style="display:inline-block;vertical-align:top;padding-left:35%;">

    <?php
      include_once('config.php');
      $curr_email = $_GET['id'];
      $sql = "SELECT prodid, quantity FROM cart WHERE email='$curr_email'";
      $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $prods = array();
      $prices = array();
      $quantities = array();
      
      function add($quantity, $id) {
        include_once('config.php');
        $query = "UPDATE cart SET quantity=5 WHERE email='st1532@srmist.edu.in' and prodid=6";
        $get_data_query = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
      }


      while ($row = mysqli_fetch_array($get_data_query)) {
        $prodid = $row['prodid'];
        $quantity = $row['quantity'];
        $sql = "SELECT picture, name, price FROM product WHERE prodid=$prodid";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $product = mysqli_fetch_array($res);
        $picurl = $product['picture'];
        $prodname = $product['name'];
        $price = $product['price'];

        array_push($prods, $prodid);
        array_push($prices, $price);
        array_push($quantities, $quantity);

        echo '<div style="display: inline-block; vertical-align: top; ">';
        echo "<img src=\"{$picurl}\" alt=\"Paracetamol_image\" width=\"100\" height=\"100\" style=\"margin: 0.5em 1em 2em 2em;\" />";
        echo "</div>";
        echo '<div style="display: inline-block;">';
        echo "<div style='margin: 0.3em 0em 0em 3em; padding:1em; font-weight: bold;'>{$prodname}: ₹ {$price}</div>";
        echo "                <b>Quantity:</b> <input type='number' onchange='calc()' class='quantity' id={$prodid} name={$prodid} value=\"{$quantity}\" min='1' max='10'>";
      echo '</div>';
      echo "<br>";
      echo "<br>";
    }
    ?>

      <br>
      <br>
      <div style="padding-left: 35%"
      <p><b>Cart Total:</b></p>
      <p style="padding-left:5%" id="total"><b>₹ 200</b></p>
      </div>
      <br>
      <br>
      <br>
      <h5 style="font-family: sans-serif;">
        Please upload a scanned copy of your prescriptions:</h5>  
      <input name="presc_file" type="file" id="file" class="inputfile" 
        style="margin-left: 1em; margin-top: 1em; width: 15em;">
        <label for="file" style = "margin-left: 35%; margin-top: 2em;">Choose a file</label>
      <button type="button" disabled id="paymentButton" class="button button1" style="margin: 3em 2em 3em 24%;" 
       >Proceed to
          Payment</button>
    <br>
    <br>

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
  
  
    <script>
      var button = document.getElementById("btn");
      var prices = <?php echo json_encode($prices); ?>;
      var quantities = <?php echo json_encode($quantities); ?>;
  
      var inputs = document.getElementsByClassName('quantity');
      var n = inputs.length, i;

      var fileInput = document.getElementById('file');
      var paymentButton = document.getElementById("paymentButton");
      var selected = false;

      fileInput.onchange = function () {
      
        var input = this.files[0];
      
        if (input) {
          bootbox.alert("You can now proceed");
          paymentButton.disabled = false;
          selected = true;
        } 
      };

      var total = 0;
      for (i = 0; i < n; i++) {
        var quantity = inputs[i].value;
        total += quantity * prices[i];
        var prodid = inputs[i].id;
      }
      amount = "₹ ".concat(total);
      document.getElementById("total").innerHTML = amount.bold();

      paymentButton.onclick = function() {
        var prices = <?php echo json_encode($prices); ?>;
        var quantities = <?php echo json_encode($quantities); ?>;
    
        var inputs = document.getElementsByClassName('quantity');
        var n = inputs.length, i;

        var total = 0;
        for (i = 0; i < n; i++) {
          var quantity = inputs[i].value;
          total += quantity * prices[i];
          var prodid = inputs[i].id;
        }
        amount = "₹ ".concat(total);
        document.getElementById("total").innerHTML = amount.bold();
        if (!selected) {
          bootbox.alert("Please select a file first!");
        }
        else {
          window.location.href = 'paymentinfo.php?amt=' + total + '&id=' + '<?php echo $curr_email; ?>';
        }
      };

      function calc() {
          var prices = <?php echo json_encode($prices); ?>;
          var quantities = <?php echo json_encode($quantities); ?>;
    
        var inputs = document.getElementsByClassName('quantity');
        var n = inputs.length, i;

        var total = 0;
        for (i = 0; i < n; i++) {
          var quantity = inputs[i].value;
          total += quantity * prices[i];
          var prodid = inputs[i].id;
        }
          amount = "₹ ".concat(total);
          document.getElementById("total").innerHTML = amount.bold();
        }

    </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="bootbox.min.js"></script>
    <script src="bootbox.locales.min.js"></script>
</body>
</html>
