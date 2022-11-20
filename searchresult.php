<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./JS/app.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("./header.php"); ?>

<div class="container">
    <div class="searchLeft">





<?php
include("./inc/conn.php");
session_start();

@$USER=$_SESSION["USER"];
$connect = new dbConnection;
$R=$_GET["search"];

//Save data to history table 
if (!empty($USER)) {
    $SQL ="insert into History(Name, UserName) values('$R', '$USER')";
    $connect -> connect()->query($SQL);    
}



// Handles the exceptions when datase is empty or when the data does not match witht he database
try {
    //get data from location table
$mySQL = "Select * from Locations where Location='$R'";
$result= $connect -> connect()->query($mySQL);
$numbRows = $result->num_rows;

if($numbRows > 0){
    // Gets the search result form the database until the input matches any of the names in the table and stores it in a array
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    // Displays all the data from the array as a GUI List
   foreach($data as $d){
    echo("
    <div class='searchContainer' onclick='showMap(".$d['SNo'].")'>
        <div class='Name'>".$d['Name']."</div>
        <div class='sno'>".$d['SNo']."</div>
        <div class='Location'>".$d['Location']."</div>
        <div class='direction' id='s".$d['SNo']."'>".$d['Directions']."</div>
    </div>
    ");
    // echo("");
   }
}   

} catch (Exception $E) {
    echo("error: ".$E -> getMessage());
}

?>

</div>
<div class="searchRight">
    Click on the search result to see the location
</div>
</div>

<script src="./JS/app.js"></script>
</body>
</html>



<style>
    .searchContainer{
    height: fit-content;
    width: 100%;
    padding: 20px 20px 20px 20px;
    font: times; 
    background-color: white;
    border: 1px solid rgb(232, 232, 232);
    margin: 10px 0;
    border-radius: 12px;
 }

 .searchContainer:hover{
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    cursor: pointer;
 }

    .Name {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 5px;
        width: 350px;
        
    }

    .PostalCode{
        margin-bottom: 5px;
        width: 350px;
    }

    .Accommodations{
        margin-bottom: 5px;
        width: 350px;
    }

    .Price {
        margin-bottom: 5px;
        width: 350px;
    }

    .Directions{
        width: 350px;
    }

    .Image{
        width: 400px;
        border-radius: 12px;
        margin-bottom: 20px;    
    }

    .searchLeft {
        display: flex;
        flex-direction: column;
        height: 100%;
        width: 30%;
        background-color: white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 20px;
    }

    .searchRight {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 70%;
    }

    .direction {
        display: none;
    }

    iframe {
        height: 100%;
        width: 100%;
    }

</style>