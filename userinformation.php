<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"demo");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfo`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>