<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catalogue - Pharmaeazy | An Easier Pharmacy</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- Fontawesome core CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--GOOGLE FONT -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div>
          <a href="#" class="list-group-item active">Medicine Types </a>
          <ul class="list-group">
            <li class="list-group-item">
              General
              <span class="label label-primary pull-right">234</span>
            </li>
            <li class="list-group-item">
              Bacterial
              <span class="label label-success pull-right">304</span>
            </li>
            <li class="list-group-item">
              Tablets
              <span class="label label-danger pull-right">400</span>
            </li>
            <li class="list-group-item">
              Viral
              <span class="label label-info pull-right">434</span>
            </li>
            <li class="list-group-item">
              Neural
              <span class="label label-success pull-right">304</span>
            </li>
          </ul>
        </div>

        <div>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success">
              <a href="offer.html">New Medicines Coming </a>
            </li>
            <li class="list-group-item list-group-item-info">
              <a href="offer.html">New Prices Added</a>
            </li>
            <li class="list-group-item list-group-item-warning">
              <a href="offer.html">Covid-19 Offers</a>
            </li>
            <li class="list-group-item list-group-item-danger">
              <a href="xml/store.xml">Doom 2020 Offers</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-9">
        <div>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Store</li>
          </ol>
        </div>
        <!-- /.div -->
        <div class="row">
          <div class="btn-group alg-right-pad pull-right">
            <button type="button" class="btn btn-default">
              <strong>6 </strong>items
            </button>
            <br />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a  class="my" href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a   href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a   href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
        <div class="row">
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a   href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a   href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <img src="assets/img/dummyimg.png" alt="" />
              <div class="caption">
                <h3><a   href="Product Details.php">Medicine Name </a></h3>
                <p>Price : <strong>Overpriced</strong></p>

                <p>Random information about the medicine.</p>
                <p>
                  <a  href="cart.php" class="btn btn-success my" role="button">Add To Cart</a>
                  <a   href="Product Details.php" class="btn btn-primary my" role="button">See Details</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <ul class="pagination alg-right-pad pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>