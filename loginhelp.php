<?php
// Conncets this file to the database
include("./inc/conn.php");

// Gets name and password from login.php
$name =$_POST["Firstname"];
$password=$_POST["Password"];

// Query to check if user exists in the database
$connect = new dbConnection;
$SQL = "Select * from UserInfo where Name='$name' and Password='$password'";
$result = $connect -> connect()->query($SQL);
$rows = $result -> num_rows;

// If the user exists, fetch the information
if($rows==1){
    session_start();
    $_SESSION['USER']=$name;
    header("Location: index.php");
}
?>
