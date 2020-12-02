<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - PharmEazy | An Easier Pharmacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <style>
      body,
      html {
        font-family: "Poppins";
      }

      .luxbar-item a:hover {
        color: green;
        background-color: honeydew;
        text-decoration: none;
      }

      .luxbar-brand i:hover {
        color: green;
      }

      .carousel {
        padding-top: 7%;
        text-shadow: 0 0 0.15em black;
        display: flex;
        position: relative;
        justify-content: center;
        align-items: center;
        background-image: url("assets/pharm.jpg");
        width: 100%;
        height: 70vh;
        background-position: initial;
        background-size: cover;
        padding-bottom: 5%;
      }

      strong {
        font-weight: 600;
      }

      .carousel h1 {
        color: white;
        font-size: 50px;
        text-shadow: 0 0 0.15em black;
      }

      .row {
        display: flex;
        justify-content: space-evenly;
        margin: 7%;
      }

      .row img {
        width: 100%;
        height: 100%;
      }

      .col-lg-3 img {
        border-radius: 50%;
        width: 80%;
        height: 80%;
        transition: transform 0.2s;
      }

      .col-lg-3 img:hover {
        transform: scale(1.1);
      }

      .col-lg-3 h3 {
        padding-top: 5%;
        padding-right: 8%;
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
  </head>
  <script>
    function navvy()
    {
      var x="<?php echo (isset($_GET['id'])) ? $_GET['id'] : "null"; ?>";
      var log="<?php echo (isset($_GET['log'])) ? $_GET['log'] : "null"; ?>";
      if(log==0)
      {
        bootbox.alert('<center>Tresspassers are prohibited. Please login again!!</center>');
      }
      else if(log==1)
      {
        bootbox.alert("<center>Logged out successfully</center>");
      }
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
    <section class="carousel">
      <h1>
        <center>Terms and Conditions</center>
      </h1>
    </section>
    <section class="body">
      <div class="row">
        <div class="col-lg-6">
          <p style="padding-top: .5%; text-align: justify; font-size: 1.2em">
            In consideration of Pharmeazy.com, LLC providing you access to our Internet website, www.pharmaeazy.com or our mobile site, m.pharmaeazy.com , our blog , our pages and/or accounts on social media websites, our mobile applications and our text messaging service, and the information, documents, reports, data, features, functionalities and software that may be offered to you through or in connection with your use of and/or access to the Site, the Pharmeazy ZoneTM, the Pharmeazy.com Apps, the PharmeazyXpressTM and the other materials on the Site, the Pharmeazy ZoneTM, the Pharmeazy.com Apps and/or the PharmeazyXpressTM (collectively, and as such may be revised from time to time by us, the "Content"), and, if applicable, you becoming and being a Partner, you hereby agree to the following terms and conditions (together with the Partner Program Terms and Conditions, if agreed by you, collectively, these "Terms of Use").
          </p>
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
