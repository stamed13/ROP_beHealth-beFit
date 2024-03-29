<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');
    require_once ('registerHelp.php');

    //debug($_POST, "formular [data]");

    $genders =  mySQLall($conn, "SELECT * FROM genders");


    //polozky
    $email = $_POST['email'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $co_passwd = password_hash($_POST['co_passwd'], PASSWORD_DEFAULT);
    $fname = ucfirst($_POST['fname']);
    $lname = ucfirst($_POST['lname']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];



    //kontrola
    $errors = [
        "checked" => false,
        "email" => false,
        "passwd" => false,
        "co_passwd" => false,
        "fname" => false,
        "lname" => false,
        "gender" => false,
        "age" => false,
        "height" => false,
        "weight" => false,
        "registered" => false,
    ];

    $classes = [
        "eBorder" => "eBorder",
    ];

    // ak bol formular vypleny
        //trim vystrihne vsetky medzery na zaciatku a konci
    if( count($_POST) != 0 ) {
        //kontrola emailu
        if( trim($_POST["email"]) == "" || 
        ! (filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
        || strlen( trim($_POST["email"]) ) > 60  
        || mySQLall($conn, "SELECT email FROM users WHERE email='$email' ") ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( trim($_POST["passwd"])  == "" || strlen( trim($_POST["passwd"]) ) < 8 
        || strlen( trim($_POST["passwd"]) ) > 10 ) {
            $errors["passwd"] = true;
        }

        //potvrdenie hesla
        if( trim($_POST["co_passwd"])  != trim($_POST["passwd"]) || $errors["passwd"] ) {
            $errors["co_passwd"] = true;
        }

        //kontrola mena
        if( trim($_POST["fname"])  == "" || strlen( trim($_POST["fname"]) ) < 2 
        || strlen( trim($_POST["fname"]) ) > 20 ) {
            $errors["fname"] = true;
        }

        //kontrola priezviska
        if( trim($_POST["lname"])  == "" || strlen( trim($_POST["lname"]) ) < 2 
        || strlen( trim($_POST["lname"]) ) > 40 ) {
            $errors["lname"] = true;
        }

        //kontrola pohlavia
        if( $_POST["gender"]  == 0 ) {
            $errors["gender"] = true;
        }

        //kontrola veku, musi byt aspon 15r
        if( $_POST["age"]  == 0 ||  $_POST["age"] < 15 
        || $_POST["age"] > 150  ) {
            $errors["age"] = true;
        }

        //kontrola vysky
        if( $_POST["height"]  == 0 || $_POST["height"] < 130 
        || $_POST["height"] > 240 ) {
            $errors["height"] = true;
        }

        //kontrola vahy
        if( $_POST["weight"]  == 0 || $_POST["weight"] < 20 
        || $_POST["weight"] > 250 ) {
            $errors["weight"] = true;
        }
    }    

    //kontrola chyb
    if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] && !$errors["co_passwd"] 
    && !$errors["fname"] && !$errors["lname"] && !$errors["gender"] && !$errors["age"]
    && !$errors["height"] && !$errors["weight"] ) {
        $errors["checked"] = true;
    } else {
        $errors["checked"] = false;
    }

    //ulozenie do databazy
    if( $errors["checked"] ) {
        $sql = "INSERT INTO users (email, passwd, fname, lname, genderId, age, height, weight, planId)
        VALUES ('$email', '$passwd', '$fname', '$lname', '$gender', '$age', '$height', '$weight', 1 )";

        if (mysqli_query($conn, $sql)) {
            $errors["registered"] = true;
        } else {
            $errors["registered"] = false;
        }
  
        mysqli_close($conn);

        //header("Location: ../log-in/log-in.php");
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
    <link rel="stylesheet" href="styles/sign-up.css">

    <title>sign-up</title>
</head>
<body>
    <div id="content">
        <div id="sign-up">
            <div id="sign-up-header">
                <a href="<?php echo $_SESSION["location"]; ?>"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
                <div id="sign-up-title">Registrácia</div>
            </div>

            <form action="" method="post" id="sign-up-formular">
                <?php 
                if(! $errors["registered"]){
                    errorLOG($conn);
                }
                ?>
                <?php register($errors); ?>

                <input type="text" id="email" 
                class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>">

                <?php //echo addClass( ($errors["email"]),  $eBorder); ?>

                <!-- chybne a neprehladne -->
                <!--    
                <input type="text" id="email" class="error-border" name="email" 
                placeholder="E-mail" value="<?= $_POST['email'] ?>"
                class="error-border"
                class="<?php if($errors["email"]): ?> error-border <?php endif ?>" >
                -->

                <input type="password" id="password" 
                class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                name="passwd" placeholder="Heslo" value="<?= $_POST["passwd"] ?>">

                <input type="password" id="co-password" 
                class="<?php echo addClass( $errors["co_passwd"], $classes["eBorder"] ); ?>" 
                name="co_passwd" placeholder="Potvrď heslo" value="<?= $_POST["co_passwd"] ?>">

                <input type="text" id="fname" 
                class="<?php echo addClass( $errors["fname"], $classes["eBorder"] ); ?>" 
                name="fname" placeholder="Meno" value="<?= ucfirst($_POST['fname']) ?>">

                <input type="text" id="lname" 
                class="<?php echo addClass( $errors["lname"], $classes["eBorder"] ); ?>" 
                name="lname" placeholder="Priezvisko" value="<?= ucfirst($_POST['lname']) ?>">

                <select id="gender" name="gender" 
                class="<?php echo addClass( $errors["gender"], $classes["eBorder"] ); ?>" >
                    <option value="0">Vyber pohlavie</option>
                    <?php foreach($genders as $gender): ?>
                        <option value="<?= $gender["idGender"] ?>"
                            <?php if($_POST["gender"] == $gender["idGender"]) { ?>
                                selected
                            <?php } ?>
                        >
                            <?= $gender["name"] ?>
                        </option>
                    <?php endforeach ?>
                </select>

                <input type="number" id="age" 
                name="age" placeholder="Vek" value="<?= $_POST['age'] ?>"
                class="<?php echo addClass( $errors["age"], $classes["eBorder"] ); ?>" >

                <input type="number" id="height" 
                name="height" placeholder="Výška" value="<?= $_POST['height'] ?>"
                class="<?php echo addClass( $errors["height"], $classes["eBorder"] ); ?>" >

                <input type="number" id="weight" 
                name="weight" placeholder="Váha" value="<?= $_POST['weight'] ?>"
                class="<?php echo addClass( $errors["weight"], $classes["eBorder"] ); ?>" >

                <input type="submit" id="bt-register" name="submit" 
                value="Registrovať sa">
            </form>

            <div id="sign-up-footer">
                <a href="../log-in/log-in.php" id="new-account">Už mám vytvorený účet</a>
            </div>
        </div>
    </div>
</body>
</html>