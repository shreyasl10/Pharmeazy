<?php
    include_once('config.php');
    if(isset($_GET['id']))
    {
    $x=$_GET['id'];
    $sql="select email from users where email='$x'";
    $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($get_data_query)==0)
    {
        echo "<script> alert('YOU SHALL NOT PASS!')
        window.location='login.php';
          </script>";
        exit();
    }
    }
?>