<?php
$user  = "root";
$password = "";
$server = "localhost";
$bd = "lunappvr";
$con = mysqli_connect($servidor, $user, $password) or die("Unable connect to server");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $bd) or die("Upps! Error connecting to the database");
?>