
<!-- This is the header of the website,
and contains the navigation menu of the website,
 which will help the user navigate through all the pages of the website. -->

<header class="header">
    <a href="./index.php">
        <img src="images/logo.png" alt="logo" class="logo">      
        </a>
        <?php
        if (empty($USER)) {
            echo('
            <div class="btns">
            <a href="./login.php" class="btn btnLogin">
                Log in
            </a>
            <a href="./signup.php" class="btn btnSignup">
                Sign up
            </a>
        </div> 
            ');
        
        } else{ 
            echo ("<div>");
            echo($USER);
            echo("<Br>");
            echo("<a href = './logout.php' class= 'logOut'> Log Out </a>");
            echo ("</div>");
        }
        ?>
    </header>