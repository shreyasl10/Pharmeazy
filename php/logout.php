<?php
    include_once('config.php');
    $email=$_POST['id'];
    $sql="update users set loggedin=0 where email='$email'";
    $update=mysqli_query($conn,$sql);
    if($update)
    {
        echo "<script>
        window.location='../login.php?log=1';
          </script>";
    }