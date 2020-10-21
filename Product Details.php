

<!DOCTYPE html>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href =  
"assets/hospital.png"
        type = "image/x-icon"> 
  <title>Product - PharmEazy | An Easier Pharmacy</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- Fontawesome core CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
  <style>
    body,
    html {
      font-family: 'Poppins';
      margin-top: 2.5rem;
    }

    .luxbar-brand i:hover {
      color: green;
    }

    .luxbar-item a:hover {
      color: green;
      background-color: honeydew;
      text-decoration: none;
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

    .tab {
      margin-right: 0.5em
    }
  </style>
  <script>
    function navvy()
    {
      var x="<?php echo (isset($_GET['id'])) ? $_GET['id'] : "null"; ?>";
      var up="<?php echo (isset($_GET['up'])) ? $_GET['up'] : "null"; ?>";
      if(up==0)
      {
        alert('New item added to cart');
      }
      else if(up==1)
      {
        alert('Quantity of item increased');
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
        document.getElementById('lol').href='login.php';
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


<body onload="navvy()">

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
  <br>

  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div>
          <a href="#" class="list-group-item active">Medicine Types
          </a>
          <ul class="list-group">

            <li class="list-group-item">General
              <span class="label label-primary pull-right">234</span>
            </li>
            <li class="list-group-item">Bacterial
              <span class="label label-success pull-right">304</span>
            </li>
            <li class="list-group-item">Tablets
              <span class="label label-danger pull-right">400</span>
            </li>
            <li class="list-group-item">Viral
              <span class="label label-info pull-right">434</span>
            </li>
            <li class="list-group-item">Neural
              <span class="label label-success pull-right">304</span>
            </li>
          </ul>
        </div>

        <div>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success"><a href="#">New Medicines Coming </a></li>
            <li class="list-group-item list-group-item-info"><a href="#">New Prices Added</a></li>
            <li class="list-group-item list-group-item-warning"><a href="#">Covid-19 Offers</a></li>
            <li class="list-group-item list-group-item-danger"><a href="#">Doom 2020 Offers</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-9">
        <div>
          <ol class="breadcrumb">
            <li><a href="index.php" class="my">Home</a></li>
            <li><a href="cata.php" class="my">Store</a></li>
            <li class="active">Product Detail</li>
          </ol>
        </div>


        <div class="row">
            <?php
            include_once 'php/config.php';
            $a= $_GET['prodid'];
            $result = mysqli_query($conn,"SELECT * FROM product WHERE prodid = $a;");
            $row = mysqli_fetch_assoc($result)   //start of loop
            
          ?>

          <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <br>
            <div class="thumbnail product-box">
              <img src="<?php echo $row['picture']; ?>" alt="" />
            </div>
          </div>

          <div class="col-md-8 text-center col-sm-12 col-xs-12">
            <h3><?php echo $row['name']; ?></h3>
            <small><?php echo $row['type']; ?></small>
            <hr class="soft">
          </div>

          <div class="col-md-8  col-sm-12 col-xs-12">
            <p><label class="control-label ">Price: <?php echo $row['price']; ?></label>
            <form action="php/add.php" method="POST"> <input type="hidden" name="prodid" value="<?php echo $_GET['prodid']; ?>"> <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <input type="hidden" name="price" value="<?php echo $row['price']; ?>"> <input type="submit" value="Add to Cart" id="lol" class="btn btn-primary pull-right" role="button"></input></form>
             
              <a href="pin.html" onclick="centeredPopup(this.href,'myWindow','500','500','yes');return false"
                class="btn btn-success pull-right tab" role="button">Verify</a>
            </p>

            <hr class="soft">
            <p><?php echo $row['description']; ?></p>

          </div>
                  </div>

        <div class="row">
          <div class="col-md-12  col-sm-12 col-xs-12">
            <hr class="soft clr">
            <h4>Medicine Properties</h4>
            <p><?php echo $row['properties']; ?></p>
            <h4>Direction for use</h4>
            <p><?php echo $row['directions']; ?></p>
          </div>
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

  <script language="javascript">
    var popupWindow = null;

    function centeredPopup(url, winName, w, h, scroll) {
      LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
      TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
      settings =
        'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll +
        ',resizable'
      popupWindow = window.open(url, winName, settings)
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="popper.min.js"></script>
    
    
      <!-- bootbox code -->
      <script src="bootbox.min.js"></script>
    <script src="bootbox.locales.min.js"></script>
    <script type="text/javascript" src="maps.js"></script>
</body>



</html>