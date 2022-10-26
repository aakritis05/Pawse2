<header class="header">
        <img src="images/logo.png" alt="logo" class="logo">
        

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