<?php
    require ("../../config.php");

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Appearance</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="register">
                <h1>Register</h1>
                <p>Complete the form to create an account</p>
                <form action="../../controllers/Auth.php" method="post">
                    <input type="text" name="login" placeholder="Login">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button name="type" value="REGISTER">Register</button>
                </form>
                <?php
                    if (isset($_SESSION["register_errors"])) {
                        foreach ($_SESSION["register_errors"] as $err) 
                        {
                            echo "<p class='error'>$err</p>";
                        }
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>