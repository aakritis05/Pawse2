<?php
include("./inc/conn.php");

$name =$_POST["Firstname"];
$password=$_POST["Password"];

$connect = new dbConnection;
$SQL = "Select * from UserInfo where Name='$name' and Password='$password'";
$result = $connect -> connect()->query($SQL);
$rows = $result -> num_rows;

if($rows==1){
    session_start();
    $_SESSION['USER']=$name;
    echo('logged in');
} else {
    echo('not logged in');
}
?>