<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');
    require_once ('loginHelp.php');

    //debug($_POST, "formular [data]");
    //debug($_SESSION, "session [data]");

    //polozky
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $hash = mySQLall($conn, " SELECT * FROM users WHERE email='$email' ");

    $location = substr_replace(" ", "Location:", 0, 0);
    $headerLocation = substr_replace($_SESSION["location"], $location, 0, 0);

    //kontrola umiestnenia aktualnej stranky
    //echo actualLocation();

    //kontrola
    $errors = [
        "checked" => false,
        "email" => false,
        "passwd" => false,
        "loged" => false,
    ];

    //triedy
    $classes = [
        "eBorder" => "eBorder",
    ];

    //kontrola hesla
    //SQLquery($conn, "SELECT passwd FROM users WHERE email='$email' ") != password_hash($_POST['passwd'], PASSWORD_DEFAULT)

    // ak bol formular vypleny
        //trim vystrihne vsetky medzery na zaciatku a konci
    if( count($_POST) != 0 ) {
        //kontrola emailu
        if( trim($_POST["email"]) == "" || 
        ! mySQLall($conn, "SELECT email FROM users WHERE email='$email' ") ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( password($conn, "SELECT * FROM users WHERE email='$email'", $email, $passwd) == true ) {
            $errors["passwd"] = true;
        }

    }    

    //ulozenie informacii o prihlasovani ako stav a uzivatel
    if(isset($_POST['submit'])){
        if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] ) {
            $errors["checked"] = true;
            $_SESSION['login'] = true;
            $id = mySQLassoc($conn, "SELECT * FROM users WHERE email='$email'");
            $_SESSION['idUser'] = $id["idUser"];
            $_SESSION['email'] = $_POST['email'];
            $inicialy = inicialy($conn, "SELECT * FROM users WHERE email='$email'");
            $_SESSION['name'] = $inicialy;//pridanie inicialov
            $fullname = fullname($conn, "SELECT * FROM users WHERE email='$email'");
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = email($conn, "SELECT * FROM users WHERE email='$email'");
            header(actualLocation());// presmerovanie na aktualnu stranku
        } else {
            $errors["checked"] = false;
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
                <a href="<?php echo $_SESSION["location"]; ?>"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
                <div id="log-in-title">Prihlasovanie</div>
            </div>

            <form action="" method="post" id="log-in-formular">
                <?php errorLOG($conn, $email, $passwd); ?>
                <?php login($errors); ?>

                <input type="text" id="email" 
                class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>">

                <input type="password" id="password" 
                class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                name="passwd" placeholder="Heslo" value="<?= $_POST["passwd"] ?>">

                <input type="submit" id="bt-login" name="submit" 
                value="Prihlásiť sa">
            </form>

            <div id="log-in-footer">
                <a href="../sign-up/sign-up.php" id="new-account">Ešte nemám vytvorený účet.</a>
            </div>
        </div>
    </div>
</body>
</html>