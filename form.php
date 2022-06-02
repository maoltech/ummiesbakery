<?php

$hostname = "us-cdbr-east-02.cleardb.com";
$username = "";
$password = "";
$db = "";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST)) {
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `order` (`email`, `message`) VALUES ('{$email}', '{$message}')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occured. Your order has not been submitted.');
    } else {
        echo "Order received, will get back to you soon.";
    }
}

?>



