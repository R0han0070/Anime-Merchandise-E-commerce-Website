<?php 
session_start();

include 'config.php';
if ($conn==false) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $uname=$_POST['uname'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $zipcode=$_POST['zipcode'];
    $email=$_POST['email'];
    $psd=$_POST['passid'];
    $sql = "INSERT INTO signup VALUES ('$uname','$name','$contact','$address','$zipcode','$email','$psd')";
    if(mysqli_query($conn, $sql)){
        echo '<script>alert("Account created")</script>';
    } else{
        echo '<script>alert("Duplicate Entry")</script>';
        header("Location: signup1.html");
    }
    mysqli_close($conn);
    

?>