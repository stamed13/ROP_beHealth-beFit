<?php
    //echo "<br>Ahoj php,<br> toto je log-in";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="log-in/styles/log-in.css">

    <title>Login</title>
</head>
<body>
    <div id="content">
        <div id="log-in">
            <div id="log-in-header">
                <div id="log-in-title">Login</div>
                <a href="../index.html"><img src="../media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
            </div>
            <form action="login.php" method="post" id="log-in-formular">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="text" id="username" name="username" 
                placeholder="Username" required>
                <input type="password" id="password" name="password" 
                placeholder="Password" required>
            </form>
            <div id="log-in-footer">
                <button type="submit" id="bt-login" name="submit" value="Login" required><a href="login.php">Login</a></button>
                <a href="../sign-up/sign-up.html" id="new-account">Don`t have an account</a>
            </div>
        </div>
    </div>

    <div id="log-in-header"></div>
</body>
</html>