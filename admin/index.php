<?php 
    session_start();
    if(!isset($_SESSION['salah']))
    {
        echo '<script>alert("username atau password yang dimasukan salah")</script>';
    }
    session_destroy();
?>

<!DOCTYPE html>
 <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="../assets/style/login.css">
 </head>
 <body>
    <div class="login-container">
        <div class="admin-icon">
            <img src="../assets/image/admin2.png" id="icon" alt="User icon"/>
        </div>
        <div class="admin-login-form">
            <form name="login" method="post" action="admin-validate.php">
                <div>
                    <input type="submit" name="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
 </body>
 </html>