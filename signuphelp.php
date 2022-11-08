<!-- This adds the new used to the database, whenever a new user creates a new account -->
<?php
include("./inc/conn.php");

$name =$_POST["Firstname"];
$password=$_POST["Password"];
$cp=$_POST["Confirm_Password"];

$connect = new dbConnection;


$mySQL ="insert into UserInfo(Name, Password) values('$name', '$password')";
$connect -> connect()->query($mySQL);


?>
