<html>

<head>
    <title>
        login form
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginc">
        <div class="loginbox">
            <br>
            <h1>
                Login here
            </h1>
            <br>
            <br>
            <form action = "loginhelp.php" method="post">
                <label for="firstname"> Username:</label><br>
                <input type="text" id="firstname" name="Firstname" placeholder="Enter username">
                <br>
                <br>
                <br>
                <label for="Password"> Password:</label>
                <br>
                <input type="Password" id="Password" name="Password" placeholder="Enter Password">
                <br>
                <br>
                <br>
                <input type="submit" value="Login">
            </form>
            <br>
            <a href="#">Forgot your password?
            </a>
            <br>
            <br>
            <a href="#">Don't have an account?
            </a>
        </div>
    
    </div>
</body>

</html>