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

  <body>
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
          <li class="luxbar-item" style="text-align: center">
            <a href="login.php">Login</a>
          </li>
          <li class="luxbar-item" style="text-align: center">
            <a href="accountinfo.php">About Me</a>
          </li>
        </ul>
      </div>
    </header>
    <section class="carousel">
      <h1>
        <center>About Us</center>
      </h1>
    </section>
    <section class="body">
      <div class="row">
        <div class="col-lg-6">
          <img src="assets/shop.jpg" alt="" />
        </div>
        <div class="col-lg-6">
          <center>
            <h2 style="padding: 5%"><strong>WHO WE ARE</strong></h2>
          </center>
          <p style="padding: 2%; text-align: justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
            tempore quam repellat eveniet facilis in dolor doloribus sapiente
            eos necessitatibus? Ipsam, ut nihil vitae repudiandae minus totam
            earum doloremque voluptates! Quos impedit in pariatur temporibus
            accusantium unde dolore, veniam asperiores consequatur! Libero, sit!
            Nam voluptatem id sint iure, possimus molestiae eaque ipsa eius
            dolorum dicta enim quasi, fuga accusantium blanditiis! Ullam laborum
            consequatur odit alias ipsam perferendis ratione quos ipsa eum ea,
            molestiae odio iusto iste quibusdam veritatis, sequi, placeat quae
            eligendi et libero earum illum nemo? Ut, quae possimus!
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <center>
            <h2 style="padding: 5%"><strong>OUR VISION</strong></h2>
          </center>
          <p style="padding: 2%; text-align: justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
            tempore quam repellat eveniet facilis in dolor doloribus sapiente
            eos necessitatibus? Ipsam, ut nihil vitae repudiandae minus totam
            earum doloremque voluptates! Quos impedit in pariatur temporibus
            accusantium unde dolore, veniam asperiores consequatur! Libero, sit!
            Nam voluptatem id sint iure, possimus molestiae eaque ipsa eius
            dolorum dicta enim quasi, fuga accusantium blanditiis! Ullam laborum
            consequatur odit alias ipsam perferendis ratione quos ipsa eum ea,
            molestiae odio iusto iste quibusdam veritatis, sequi, placeat quae
            eligendi et libero earum illum nemo? Ut, quae possimus!
          </p>
        </div>
        <div class="col-lg-6">
          <img src="assets/doctor.jpg" alt="" />
        </div>
      </div>
      <center>
        <h2><strong>MEET OUR TEAM</strong></h2>
        <div class="row">
          <div class="col-lg-3">
            <img
              onclick="window.open('xml/shreyas.xml')"
              src="assets/shreyas.jpg"
            />
            <center>
              <h3>Shreyas</h3>
            </center>
          </div>
          <div class="col-lg-3">
            <img
              onclick="window.open('xml/mihir.xml')"
              src="assets/mihir.jpg"
            />
            <center>
              <h3>Mihir</h3>
            </center>
          </div>
          <div class="col-lg-3">
            <img
              onclick="window.open('xml/bihanga.xml')"
              src="assets/bingo.jpg"
            />
            <center>
              <h3>Bihanga</h3>
            </center>
          </div>
          <div class="col-lg-3">
            <img
              onclick="window.open('xml/adhitya.xml')"
              src="assets/adithya.jpg"
            />
            <center>
              <h3>Adhithya</h3>
            </center>
          </div>
        </div>
      </center>
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
            <p class="pl-3">Mon - Sat : 09:00AM - 10:00PM</p>
            <p class="pl-3">Sunday : 10:00AM - 10:00PM</p>
          </div>
        </div>
      </div>
    </footer>
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
  </body>
</html>
