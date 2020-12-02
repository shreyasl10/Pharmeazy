<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel = "icon" href =  
"assets/hospital.png"
        type = "image/x-icon"> 
  <title>PharmEazy | An Easier Pharmacy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
  <style>
    body,
    html {
      font-family: 'Poppins';
    }

    .luxbar-brand i:hover {
      color: green;
    }

    .luxbar-item a:hover {
      color: green;
      background-color: honeydew;
      text-decoration: none;
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

    .main{
       width: 900px;
       height: 900px;
       margin: 9em auto;
       border-radius: 1.5em;
       background-color: #d1d9e6;
    }

    .form-group{
      width: 76%;
      padding: 10px 20px;
      margin-left: 50px;
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
  </style>
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
</head>

<body onload="navvy();">
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
            <a class="my " href="index.php">Home</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my " href="about.php">About Us</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my shop " href="cata.php">Shop</a>
          </li>
          <li  id="log" class="luxbar-item" style="text-align: center">
            <a class="my " href="login.php">Login</a>
          </li>
          <li  id="prof" class="luxbar-item" style="text-align: center">
            <a class="my " href="accountinfo.php">My Profile</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a  class="my sho" href="cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </header>
  <section>
    <div class="container">
      <div class="row">
        <div class="main">
          <h1 style="text-align: center; padding-top: 20px">Sign Up</h1>
          <form name="myForm" onsubmit="return(validate())" action="php/reg.php" method="POST">
            <div class="form-group">
              <label style="padding-top: 10px" for="name">Name</label>
              <input class="form-control" type="text" name="name" placeholder="Enter your name" />
            </div>
            <div class="form-group">
              <label style="padding-top: 10px" for="phoneno">Phone Number</label>
              <input class="form-control" type="text" name="phoneno" placeholder="Enter your phone number" />
            </div>
            <div class="form-group">
              <label style="padding-top: 10px" for="address">Address</label>
              <input class="form-control" type="text" name="address" placeholder="Enter your address" />
            </div>
            <div class="form-group">
              <label style="padding-top: 10px" for="ailments">Allergies</label>
              <input class="form-control" type="text" name="ailments" placeholder="Enter your ailments" />
            </div>
            <div class="form-group">
              <label style="padding-top: 10px" for="imglink">Profile Image</label>
              <input class="form-control" type="text" name="imglink" placeholder="Provide a profile image link" />
            </div>
            <div class="form-group">
              <label style="padding-top: 10px" for="email">Email</label>
              <input class="form-control" type="email" name="email" placeholder="Enter your email" />
            </div>
              <div class="form-group">
              <label style="padding-top: 10px" for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Enter password" />
            </div>
            <div style= "padding-top: 50px; width: 25%; margin: auto" class="form-group">
              <button type="Submit" value="Submit" class="btn btn-success btn-block">Sign Up</button>
            </div>
            <?php
            if(isset($_GET['id']) and ($_GET['id']==0))
            {
              echo "<script> alert('Account already exists')
              window.location = 'register.php';
              </script>";
            }
            ?>
          </form> 
        </div>
      </div>
    </div>
  </section>
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
              <a class="my" href="terms_and_conditions.php">Terms and Conditions</a>
            </li>
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Customer Service</a>
            </li>
            <li>
              <a class="my" href="faq.php">FAQs</a>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>

  <!-- Script for From Validation -->
  <script type="text/javascript">
    function validate()
    {
      if(document.myForm.name.value == "")
      {
        alert("Please provide your Name");
        document.myForm.name.focus();
        return false;
      }
      if(document.myForm.phoneno.value == "")
      {
        alert("Please provide your Phone number");
        document.myForm.phoneno.focus();
        return false;
      }
      else
      {
        var phone = document.myForm.phoneno.value;
        if(isNaN(phone))
        {
          alert("Please enter a valid Phone Number");
          document.myForm.phoneno.focus();
          return false;
        }
        if(phone.length<1 || phone.length>10)
        {
          alert("Please enter a valid Phone Number");
          document.myForm.phoneno.focus();
          return false;
        }
      }
      if(document.myForm.email.value == "")
      {
        alert("Please provide your Email");
        document.myForm.email.focus();
        return false;
      }
      else
      {
        var emailId = document.myForm.email.value;
        var atpos =  emailId.indexOf("@");
        var dotpos = emailId.lastIndexOf(".");
        if(atpos < 1 || (dotpos - atpos<2) || (dotpos + 2 >= emailId.length ))
        {
          alert("Please enter a valid Email");
          document.myForm.email.focus();
          return false;
        }
      }
      if(document.myForm.password.value == "")
      {
        alert("Please provide your Password");
        document.myForm.password.focus();
        return false;
      }
      return (true);
    }
  </script>

</body>
</html>