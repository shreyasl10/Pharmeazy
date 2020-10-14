<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PharmEazy | An Easier Pharmacy</title>
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
      * {
        padding: 0;
        margin: 0;
      }

      html,
      body {
        padding: 0;
        margin: 0;
        font-family: "Poppins", sans-serif;
      }

      .luxbar-item a:hover {
        color: green;
        background-color: honeydew;
        text-decoration: none;
      }
      .statelinks:hover {
        text-decoration: none;
      }

      .luxbar-brand i:hover {
        color: green;
      }
      .carousel {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        height: 100vh;
        padding-bottom: 3.5rem;
        text-align: center;
      }

      .carousel .header-text {
        text-shadow: 0 0 0.15em black;
        padding: 2rem 2.5rem;
        border-radius: 0.5rem;
        background-color: rgba(0, 0, 0, 0.1);
        color: white;
      }

      .carousel h1 {
        margin-bottom: 0.75rem;
        font-size: 4.5rem;
      }

      .carousel h4 {
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
        padding-bottom: 1rem;
      }

      .header-slides img {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        object-fit: inherit;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.75s ease-in-out;
      }

      .stores,
      .icons {
        padding: 5%;
      }

      .row {
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 2rem 2.5rem;
        display: flex;
        justify-content: space-evenly;
      }

      .card {
        border: none !important;
        background: none !important;
      }

      .statepic {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 5%;
        padding: 2rem 2.5rem;
      }

      .statename {
        margin-right: 13%;
      }

      .statepic img {
        position: absolute;
        object-fit: inherit;
        width: 300px;
        height: 200px;
        z-index: -1;
        padding-bottom: 5%;
      }

      .description {
        color: white;
        text-shadow: 0 0 0.15em black;
        opacity: 0;
        font-weight: bold;
        font-size: 14px;
        text-align: center;
      }

      .statepic:hover .description {
        opacity: 1;
        margin-left: 10%;
      }

      .statepic:hover .statename {
        margin-left: 10%;
      }

      .row h3 {
        display: flex;
        justify-content: space-evenly;
        padding-top: 15%;
      }

      .row img {
        padding-left: 2rem;
      }

      .hov {
        transition: transform 0.2s;
      }

      .hov:hover {
        transform: scale(1.3);
      }

      .hov:hover .statename h3 {
        padding-right: 15%;
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
      }
      else
      {
        for(j=0;j<t1.length;j++)
        {
          t1[j].href=s;
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
            <a class="my shop" href="cata.php">Shop</a>
          </li>
          <li  id="log" class="luxbar-item" style="text-align: center">
            <a class="my" href="login.php">Login</a>
          </li>
          <li  id="prof" class="luxbar-item" style="text-align: center">
            <a class="my" href="accountinfo.php">My Profile</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a class="my shop" href="cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </header>
    <header class="carousel">
      <div class="header-slides">
        <img src="assets/shop1.png" alt="" />
        <img src="assets/capsule.png" alt="" />
        <img src="assets/tubecaps.png" alt="" />
      </div>
      <div class="header-text">
        <h1>
          <center>Welcome to PharmEazy</center>
        </h1>
        <h4>
          <center>We are LOREM! We are IPSUM! We are DOLOR!</center>
        </h4>
        <center>
          <a class="my shop" href="cata.php"
            ><button
              class="btn btn-success"
              style="width: 9rem; height: 2.5rem; margin-top: 1%"
            >
              Shop Now
            </button></a
          >
        </center>
      </div>
    </header>
    <section class="body">
      <section class="icons" style="padding-left: 5%">
        <div class="row">
          <div class="card" style="padding-bottom: 2%">
            <img
              src="assets/first.png"
              alt="first"
              style="max-width: 200px; margin-left: 5%"
              class="hov"
            />
            <h3 style="text-shadow: 0 0 0.15em white">Lorem Ipsum Dolor!</h3>
          </div>
          <div class="card" style="padding-bottom: 2%">
            <img
              src="assets/second.png"
              alt="second"
              style="max-width: 200px; margin-left: 5%"
              class="hov"
            />
            <h3 style="text-shadow: 0 0 0.15em white">Lorem Ipsum Dolor!</h3>
          </div>
          <div class="card" style="padding-bottom: 2%">
            <img
              src="assets/third.png"
              alt="third"
              style="max-width: 200px; margin-left: 5%"
              class="hov"
            />
            <h3 style="text-shadow: 0 0 0.15em white">Lorem Ipsum Dolor!</h3>
          </div>
        </div>
      </section>
      <section
        class="about"
        style="padding: 5%; background-color: rgba(0, 0, 0, 0.2)"
      >
        <center>
          <h3 style="text-shadow: 0 0 0.15em white">
            <strong>Want to learn more about us??</strong>
          </h3>
          <a class="my" href="about.php"
            ><button
              class="btn btn-success"
              style="width: 9rem; height: 2.5rem; margin-top: 2%"
            >
              About Us!
            </button></a
          >
        </center>
      </section>
      <section class="stores" style="padding-top: 5%; padding-left: 5%">
        <center>
          <h3 style="text-shadow: 0 0 0.15em white">
            <strong>Visit Us At Our Stores</strong>
          </h3>
        </center>
        <div class="row" style="margin-top: 5%; margin-right: 2%">
          <div onclick="maps(1)" class="statepic hov">
            <img
              src="assets/chennai.jpg"
              style="max-width: 400px; max-height: 300px"
              alt="ChennaiPic"
            />
            <div class="statename">
              <h3
                style="
                  color: white;
                  text-shadow: 0 0 0.15em black;
                  padding-left: 30%;
                "
              >
                Chennai
              </h3>
              <div class="description">15, Lorem Ipsum Street, Chennai</div>
            </div>
          </div>

          <div onclick="maps(2)" class="statepic hov">
            <img
              src="assets/mumbai.jpg"
              style="max-width: 400px; max-height: 300px"
              alt="MumbaiPic"
            />
            <div class="statename">
              <h3
                style="
                  color: white;
                  text-shadow: 0 0 0.15em black;
                  padding-left: 30%;
                "
              >
                Mumbai
              </h3>
              <div class="description">5, Dolor Connecticut Street, Mumbai</div>
            </div>
          </div>

          <div onclick="maps(3)" class="statepic hov">
            <img
              src="assets/delhi.jpg"
              style="max-width: 400px; max-height: 300px"
              ;
              alt="DelhiPic"
            />
            <div class="statename">
              <h3
                style="
                  color: white;
                  text-shadow: 0 0 0.15em black;
                  padding-left: 30%;
                "
              >
                Delhi
              </h3>
              <div class="description">
                20,Consectetur adipisicing Street, Delhi
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="newsLetter">
        <center>
          <h3 style="text-shadow: 0 0 0.15em white">
            <strong>Want to get updates on our Eazy Offers?? </strong>
          </h3>
          <h5 style="padding-top: 1.5em">
            Subscribe to get instant updates the next time we give an EZ Offer
          </h5>
          <form
            name="news"
            action=""
            onsubmit="return (validate())"
            method="POST"
            style="padding-top: 1.5em"
          >
            <label for="email">
              <h5>Email:</h5>
            </label>
            <input type="email" id="email" name="email" />
            <div class="form-group">
              <button
                type="Submit"
                value="Submit"
                style="width: 10%; margin: 2em"
                class="btn btn-success btn-block"
              >
                Submit
              </button>
            </div>
          </form>
        </center>
      </section>
    </section>
    <footer class="pt-1">
      <div>
        <div class="row">
          <div class="col-md-6">
            <h5>About Us</h5>
            <p style="text-align: justify">
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
            <p class="pl-2">Mon - Sat : 09:00AM - 10:00PM</p>
            <p class="pl-2">Sunday : 10:00AM - 10:00PM</p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript">
      function validate() {
        if (document.news.email.value == "") {
          alert("Please provide your Email");
          document.myForm.email.focus();
          return false;
        } else {
          var emailId = document.myForm.email.value;
          var atpos = emailId.indexOf("@");
          var dotpos = emailId.lastIndexOf(".");
          if (atpos < 1 || dotpos - atpos < 2 || dotpos + 2 >= emailId.length) {
            alert("Please enter a valid Email");
            document.myForm.email.focus();
            return false;
          }
        }
        alert("You have successfully subscribed for latest updates");
        return true;
      }
    </script>
    <script type="text/javascript" src="slideshow.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="maps.js"></script>
  </body>
</html>
