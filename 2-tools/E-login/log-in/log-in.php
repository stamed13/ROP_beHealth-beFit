<!--
<?php
    echo "<br>Ahoj php,<br> toto je log-in";
?>
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../../B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/log-in.css">

    <title>login</title>
</head>
<body>
    <div id="content">
        <div id="log-in">
            <div id="log-in-header">
                <div id="log-in-title">Login</div>
                <a href="../../../index.php"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
            </div>
            <form action="" method="" id="log-in-formular">
                <input type="text" id="email" name="email" 
                placeholder="Email" required>
                <input type="password" id="password" name="password" 
                placeholder="Password" required>
            </form>
            <div id="log-in-footer">
                <input type="submit" id="bt-login" name="submit" 
                value="Login" required>
                <a href="../sign-up/sign-up.php" id="new-account">Don`t have an account</a>
            </div>
        </div>
    </div>

    <div id="log-in-header"></div>
</body>
</html>