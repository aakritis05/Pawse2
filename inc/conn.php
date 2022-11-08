<?php
class dbConnection{
    //Variables to store information
    private $servername;
    private $username;
    private $password;
    private $dbname;    

    //This function is used to conncet the file to the database
    function connect(){
        $this-> servername = "localhost";
        $this-> username = "root";
        $this-> password = "";
        $this-> dbname = "pawse";

        $conn=new mysqli(
            $this-> servername, 
            $this-> username,
            $this->password,
            $this->dbname
        );

        //Returns true or false based on whether the connection was made or not
        return $conn;
    }
}
?>
