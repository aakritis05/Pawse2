<?php
include("./inc/conn.php");

session_start();

@$USER=$_SESSION["USER"];


$connect = new dbConnection;



// $mySQL = "Select * from History where UserName='$USER'";
// $result= $connect -> connect()->query($mySQL);
// $numbRows = $result->num_rows;

// if($numbRows > 0){
//     while($row=$result->fetch_assoc()){
//         $data[]=$row;
//     }

//     foreach($data as $d){
//         echo($d['Name']);
//         echo('<br>');    
//        }
//     }   
    


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This connects the style sheet with the HTML/PHP -->
    <link rel="stylesheet" href="style.css">
    <!-- This is the name of the page that appears on the browser tab -->
    <title>Pawse</title>
    <!-- Linking the JS file with the HTML/PHP -->
    <script src="./JS/app.js"></script>
    <!-- Importing JQuery -->
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
<?php include("./header.php"); ?>
    <div class="container">
        <div class="left">
            <h2 class="heading">
                Current location?
            </h2>
            <br>
            <div class="searchArea">
                <input type="text" name="" id="searchBar" placeholder="Location, hotels">
                    <img src="./Images/search.png" alt="" class="btnSearch" onclick="search();">
            </div>
            <div class="places">
                <div class="list">
                    <a href="result.php">
                        <img src="./Images/bgk.jpeg">
                        Bangkok
                    </a>
                    <a href="result.php">
                        <img src="./Images/Pattaya.jpeg">
                        Pattaya
                    </a>
                    <a href="result.php">
                        <img src="./Images/chiangmai.jpeg">
                        Chiang Mai
                    </a>
                </div>
                <div class="list">
                    <a href="result.php">
                        <img src="./Images/Phuket.jpeg">
                        Phuket
                    </a>
                    <a href="result.php">
                        <img src="./Images/Krabi.jpeg">
                        Krabi
                    </a>
                    <a href="result.php">
                        <img src="./Images/Buri.jpeg">
                        Nonthaburi
                    </a>
                </div>
            </div>
        </div>
        <div class="right">

            <!-- <div class="favorites sidebar">
                <div class="fav">
                    <img src="./Images/right-arrow.png" alt="" height="10">
                    Favorites
                    <div class="fav-container">
                        fav 1
                        <br>
                        fav 2
                        <br>
                        fav 3
                        <br>
                    </div>
                </div>
            </div> -->

            <div class="history sidebar">
                <div class="his">
                    <img class = "arrowImg" src="./Images/right-arrow.png" alt="" height="10">

                    History
                </div>
                <div class="his-container">
                        <?php
                        $mySQL = "Select * from History where UserName='$USER'";
                        $result= $connect -> connect()->query($mySQL);
                        $numbRows = $result->num_rows;
                        
                        if($numbRows > 0){
                            while($row=$result->fetch_assoc()){
                                $data[]=$row;
                            }
                        
                            foreach($data as $d){
                                echo($d['Name']);
                                echo('<br>');    
                               }
                            }                           
                        ?>
                    </div>
                </div>
        </div>
    </div>


</body>


</html>