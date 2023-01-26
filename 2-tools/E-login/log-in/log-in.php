<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');
    require_once ('loginHelp.php');
    require_once ('loged.php');

    //debug($_POST, "formular [data]");

    //debug($_SESSION, "session [data]");

    //polozky
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $hash = SQLquery($conn, " SELECT * FROM users WHERE email='$email' ");

    echo $hash['passwd'];

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


    

    //kontrola hesla
    //SQLquery($conn, "SELECT passwd FROM users WHERE email='$email' ") != password_hash($_POST['passwd'], PASSWORD_DEFAULT)

    // ak bol formular vypleny
    if( count($_POST) != 0 ) {
        //kontrola emailu
        //trim vystrihne vsetky medzery na zaciatku a konci
        if( trim($_POST["email"]) == "" || 
        ! SQLquery($conn, "SELECT email FROM users WHERE email='$email' ") ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( password($conn, $email, $passwd) == true ) {
            $errors["passwd"] = true;
        }

    }    

    /*if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] ) {
        $errors["checked"] = true;
        $_SESSION['login'] = true;
        $inicialy = inicialy($conn, $email);
        $_SESSION['name'] = $inicialy;//pridanie inicialov
        $fullname = fullname($conn, $email);
        $_SESSION['fullname'] = $fullname;
        header("Location: ../../../index.php");
    } else {
        $errors["checked"] = false;
        $_SESSION['login'] = false;
    }*/

    if(isset($_POST['submit'])){
        if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] ) {
            $errors["checked"] = true;
            $_SESSION['login'] = true;
            $inicialy = inicialy($conn, $email);
            $_SESSION['name'] = $inicialy;//pridanie inicialov
            $fullname = fullname($conn, $email);
            $_SESSION['fullname'] = $fullname;
            header("Location: ../../../index.php");
        } else {
            $errors["checked"] = false;
            $_SESSION['login'] = false;
        }
    }

    function loginSession($errors) {
        if( $errors["checked"] == true ) {
            $_SESSION['login'] = true;
            $_SESSION['name'] = true;
        } else {
            $_SESSION['login'] = false;
        }
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
                <a href="../../../index.php"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
                <div id="log-in-title">Sign-up</div>
            </div>

            <form action="" method="post" id="log-in-formular">
                <?php errorLOG($conn, $email, $passwd); ?>
                <?php login($errors); //password($conn, $email, $passwd); ?>

                <input type="text" id="email" 
                class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>">

                <input type="password" id="password" 
                class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                name="passwd" placeholder="Heslo" value="<?= $_POST["passwd"] ?>">

                <input type="submit" id="bt-login" name="submit" 
                value="Login">
            </form>

            <div id="log-in-footer">
                <a href="../sign-up/sign-up.php" id="new-account">Don`t have an account</a>
            </div>
        </div>
    </div>
</body>
</html>