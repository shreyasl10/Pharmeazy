<?php
    include_once('config.php');
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :  "";
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) :  "";
    $phoneno = isset($_POST['phoneno']) ? mysqli_real_escape_string($conn, $_POST['phoneno']) :  "";
    $address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) :  "";
    $ailments = isset($_POST['ailments']) ? mysqli_real_escape_string($conn, $_POST['ailments']) :  "";
    $sql="select email from users where email='$email'";
    $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($get_data_query)!=0)
    {
        header("Location:../register.php?id=0");
    }
    else
    {
        $sql1="insert into users values('$email','$password','$name',$phoneno,'adadadadadad','$address','$ailments')";
        $post_data_query = mysqli_query($conn, $sql1);
        if($post_data_query)
        {
            echo "<script> alert('Registration successful')
            window.location='../login.php';
              </script>";
        }
    }
?>