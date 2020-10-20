<?php
    include_once('config.php');
    if(isset($_POST['id']) and isset($_POST['prodid']))
    {
        $id=$_POST['id'];
        $prod=$_POST['prodid'];
        $price=$_POST['price'];
        $sql="select quantity from cart where prodid=$prod and email='$id';";
        $get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if(mysqli_num_rows($get_data_query)!=0)
        {
            $r=mysqli_fetch_array($get_data_query);
            $x=$r['quantity'];
            $x=$x+1;
            $sq="update cart set quantity=$x where prodid=$prod and email='$id';";
            $get_data_query = mysqli_query($conn, $sq) or die(mysqli_error($conn));
            echo "<script>
            window.location='../Product Details.php?prodid=$prod&id=$id&up=1';
            </script>";
        }
        else
        {
            $sq="insert into cart values($prod,'$id',1,$price);";
            $get_data_query = mysqli_query($conn, $sq) or die(mysqli_error($conn));
            echo "<script>
            window.location='../Product Details.php?prodid=$prod&id=$id&up=0';
            </script>";
        }
    }
