<?php
    include_once('config.php');
    if(isset($_GET['id']))
    {
    $x=$_GET['id'];
    $sql="select email,loggedin from users where email='$x'";
    $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $log=0;
    $flag=0;
    if(mysqli_num_rows($get_data_query)!=0)
    {
      if($r=mysqli_fetch_array($get_data_query))
      {
        if($r['loggedin']==0)
        {
          $flag=1;
        }
      }
    }
    if(mysqli_num_rows($get_data_query)==0 or $flag==1)
    {
        echo "<script>
        window.location='login.php?log=0';
          </script>";
        exit();
    }
    }
?>