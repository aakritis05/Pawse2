<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("./header.php"); ?>
</body>
</html>






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




//get data from location table
$mySQL = "Select * from Locations where Location='$R'";
$result= $connect -> connect()->query($mySQL);
$numbRows = $result->num_rows;

if($numbRows > 0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
   foreach($data as $d){
    echo("<div class='searchContainer'>");
    echo('<img class = "Image" src = "./Images/'.$d['Image'].'">');    
    echo("<div class='Name'>".$d['Name']."</div>");
    echo("<div class='Accommodations'>".$d['Accommodations']."</div>");
    // echo("<div class='Directions'>".$d['Directions']."</div>");
    echo("<div class='PostalCode'>".$d['PostalCode']."</div>");
    echo("<div class='Price'>".$d['Price']."</div>");
    echo("</div>");
   }
}   

?>

<style>
    .searchContainer{
    height: fit-content;
    width: fit-content;
    padding: 20px 20px 20px 20px;
    font: times 

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

</style>