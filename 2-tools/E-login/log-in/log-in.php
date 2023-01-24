<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once('../helper/config.php');
    require_once "../helper/Helper.php";

    debug($_POST, "formular [data]");

    //polozky
    $email = $_POST['email'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);


    //kontrola
    $errors = [
        "checked" => false,
        "email" => false,
        "passwd" => false,
        "loged" => false,
    ];

    $classes = [
        "eBorder" => "eBorder",
    ];

    // ak bol formular vypleny
    if( count($_POST) != 0 ) {
        //kontrola emailu
        //trim vystrihne vsetky medzery na zaciatku a konci
        if( trim($_POST["email"]) == "" || 
        ! (filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
        || strlen( trim($_POST["email"]) ) > 60  
        || SQLquery($conn, "SELECT email FROM users WHERE email='$email' ") ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( trim($_POST["passwd"])  == "" || strlen( trim($_POST["passwd"]) ) < 8 
        || strlen( trim($_POST["passwd"]) ) > 10 ) {
            $errors["passwd"] = true;
        }

    }    

    if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] ) {
        $errors["checked"] = true;
    } else {
        $errors["checked"] = false;
    }

?>



<!-- HTML -->
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

            <form action="" method="post" id="log-in-formular">

                <input type="text" id="email" 
                class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>">

                <input type="password" id="password" 
                class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                name="passwd" placeholder="Heslo" value="<?= $_POST["passwd"] ?>">

                <input type="submit" id="bt-login" name="submit" 
                value="Register">
            </form>

            <div id="log-in-footer">
                <a href="../sign-up/sign-up.php" id="new-account">Don`t have an account</a>
            </div>
        </div>
    </div>
</body>
</html>