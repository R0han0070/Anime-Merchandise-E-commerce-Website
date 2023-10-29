<?php
session_start();
include 'config.php';
if(isset($_GET['cartadd'])){
    $ses = $_SESSION['ses'];
    $i_id = $_GET['id'];
    $price=$_GET['price'];
    $sql="INSERT INTO cart_data (ses, i_id, price) VALUES('$ses','$i_id','$price')";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: Posters.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}
if(isset($_GET['addcartmain'])){
    $ses = $_SESSION['ses'];
    $i_id = $_GET['id'];
    $size = $_GET['size'];
    $price=$_GET['price'];
    $sql="INSERT INTO cart_data (ses, i_id, size, price) VALUES('$ses','$i_id', '$size','$price')";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: Posters.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}
if(isset($_POST['delsize'])){
    $delsize=$_POST['delsize'];
    $ses = $_SESSION['ses'];
    $delid=$_POST['delid'];
    $sql="DELETE FROM cart_data WHERE i_id='$delid' AND size='$delsize' AND ses='$ses' LIMIT 1";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: cart.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}
if(isset($_POST['addsize'])){
    $addsize=$_POST['addsize'];
    $ses = $_SESSION['ses'];
    $addid=$_POST['addid'];
    $addprice=$_POST['addprice'];
    $sql="INSERT INTO cart_data (ses, i_id, size,price) VALUES('$ses','$addid','$addsize','$addprice')";
    $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: cart.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}

if(isset($_POST['del'])){
  $del=$_POST['del'];
  $ses=$_SESSION['ses'];
  $sql="DELETE FROM cart_data WHERE i_id='$del' AND ses='$ses' LIMIT 1";
  $result=mysqli_query($conn, $sql);
    if($result){
        header("Location: cart.php");
    }else{
        echo "<script>alert('Error');</script>";
    }
}

?>