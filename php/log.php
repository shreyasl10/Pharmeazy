<?php
	include_once('config.php');
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
	$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :  "";
	$auth=0;
	$sql="select password from users where email='$email'";
	$get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($r = mysqli_fetch_array($get_data_query))
	{
		if($r['password']==$password)
		{
			$auth=1;
			$sq="update users set loggedin=1 where email='$email'";
			$update=mysqli_query($conn,$sq);
		}
	}
	if($auth==0)
	{
		header("Location:../login.php?id=0",true);
		exit();
	}
	else
	{
		header("Location:../index.php?id=$email&log=1",false);
		exit();
	}
?>