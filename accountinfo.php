<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel = "icon" href =  
"assets/hospital.png"
        type = "image/x-icon"> 
  <title>Account Information - PharmEazy | An Easier Pharmacy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <style>
    body,
    html {
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
    
    .presc:hover {
        transform: scale(1.1);
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
  <main style="margin-top: 3rem;">
    <div
        style="display: inline-block; vertical-align: top; margin-left: 2.5em;"
      >
        <h1 style="margin: 1em 0.5em 1em 0em;">
          <u>My Account Information</u>
        </h1>

        <?php
            include_once('config.php');
            $curr_email = $_GET['id'];
            $sql = "SELECT name FROM users where email='$curr_email'";
            $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $name = mysqli_fetch_array($get_data_query);
          ?>

        <p>Name: <b><?php echo $name['name'] ?> </b></p>
        <p></p>
        <p>Age: <b>21 years</b></p>
        <p>Known allergics:</p>
        
        <?php
            $sql = "SELECT allergies FROM users where email='$curr_email'";
            $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $res = mysqli_fetch_array($get_data_query);
            $res2 = $res;
            $res1 = implode(',', $res2);
            $result = explode(" ", $res1);
            echo "<ul>";
            for ($x = 0; $x <= mysqli_num_rows($get_data_query) / 2; $x+=1) { 
                echo "<b>{$res[$x]}</b>";
              }
              echo "<br>";
          ?>
        
        
        <br>
        <div style="background-image: url(assets/house4.jpeg);  color: #294172; padding: 1em; background-size: 
        cover; width: 33em; box-shadow: 10px 10px 5px #ccc; border-radius: 2%;">
        <h3>Saved address:</h3>
        <p><b>Address type (home/office): </b> Home</p>
        <?php 
          $sql = "SELECT address FROM users where email='$curr_email'";
          $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
          $res = mysqli_fetch_assoc($get_data_query);
          $res1 = $res['address'];
          $res2 = explode(",", $res1);
          for ($x=0; $x <5; $x+=1) {
            if ($x == 0) {
              echo "<p><b>Flat number: </b>{$res2[$x]}</p>";
            }
            elseif ($x == 1) {
              echo "<p><b>Street name: </b>{$res2[$x]}</p>"; 
            }
            elseif ($x == 2) {
              echo "<p><b>Area: </b>{$res2[$x]}</p>";
            }
            elseif ($x == 3) {
              echo "<p><b>City: </b>{$res2[$x]}</p>";
            }
            elseif ($x == 4) {
              echo "<p><b>PIN: </b>{$res2[$x]}</p>";
            }
          }

          $sql = "SELECT mobno FROM users where email='$curr_email'";
          $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
          $mobno = mysqli_fetch_assoc($get_data_query);
          echo "<p><b>Mobile: </b>+91-{$mobno['mobno']}</p>";
        ?>
        
        </div>
        <br />
      </div>
      <div style="display: inline-block; margin-left: 25%; margin-top: 3%; padding: 1em;">
        <?php
          $sql = "SELECT piclink FROM users where email='$curr_email'";
          $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
          $res = mysqli_fetch_array($get_data_query);
          $link =  $res['piclink'];
        ?>
        <img
          src=<?php echo $link; ?>
          alt="Person_image"
          width="250"
          height="250"
          style="border-radius: 50%; box-shadow: 10px 10px 5px #ccc;"
        />
        <br>


        <?php
          function func() {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

          
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check !== false) {
              
                $uploadOk = 1;
              } else {
            
                $uploadOk = 0;
              }
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }

          
            if ($uploadOk == 0) {
              //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
               // echo "Sorry, there was an error uploading your file.";
              }
            }

            //include_once('config.php');
            $conn = mysqli_connect('localhost', 'root', 'root');
            mysqli_select_db($conn, 'pharmeazy');

            $curr_email = $_GET['id'];
            //echo $_FILES["fileToUpload"]["name"];
            $picurl = "uploads/".$_FILES["fileToUpload"]["name"];
            $sql = "UPDATE `users` SET `piclink` = '$picurl' WHERE `users`.`email` = '$curr_email'; ";
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            //$product = mysqli_fetch_array($res);
            echo("<meta http-equiv='refresh' content='1'>");

          }

          if(isset($_POST['submit']))
            {
              func();
            } 
          ?>

        <form action="" method="post" enctype="multipart/form-data">
          <br>
          <input type="file" name="fileToUpload" id="fileToUpload" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 20em;">
          <br>
          <br>
          <input type="submit" value="Upload Image" name="submit">
        </form>
        
        
        <br>
        <br>
        <h4 style="margin-left: -8%;" >My uploaded prescriptions:</h3>
        <p style="margin-left: -6%;">(click on the image below to view them)</p>
        <div class="presc">
          <a href="xml/prescriptions.xml">
            <img src="assets/presc.jpeg" alt="prescription image" width="200" height="200" 
              style="border-radius: 10%; margin-left: 10%;"/>
          </a>
        </div>
      </div>
      <center>  <form action="php/logout.php" method="POST"> <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <input type="Submit" value="Logout" style="width: 20%; margin-top:2%;margin-bottom: 5%"
                class="btn btn-warning btn-block"></input> </form> </center>
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
