<?php 

?>

<html>

<head>
    <title>
        Signup form
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="registering">
        <div class="signup">
            <img src="./Images/avatar.png" class="Avatar">
            <br>
            <h1>
                Register
            </h1>
            <br>
            <form action = "signUpHelp.php" method="post">
                <label for="firstname"> Username:</label>
                <br>
                <input type="text" id="Firstname" name="Firstname" placeholder="Type Username">
                <br>
                <br>
                <br>
                <label for="Password"> Password:</label>
                <br>
                <input type="Password" id="Password" name="Password" placeholder="Enter Password">
                <br>
                <br>
                <br>
                <label for="Repassword"> Confirm password:</label>
                <br>
                <input type="Password" id="Repassword" name="Confirm_Password" placeholder="Confirm Password">
                <br>
                <br>
                <br>
                <input type="submit" value="Sign up">
            </form>
            <br>
        </div>  
    </div>
</body>
</html>