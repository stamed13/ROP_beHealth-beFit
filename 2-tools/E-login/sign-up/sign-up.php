<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once('../helper/config.php');
    require_once('fetch-data.php');

    //polozky
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $co_passwd = $_POST['co_passwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    //kontrola
    $error = [
        "checked" => false,
        "email" => false,
        "passwd" => false,
        "co_passwd" => false,
        "fname" => false,
        "lname" => false,
    ];

    // ak bol formular vypleny
    if( count($_POST) != 0 ) {
        //kontrola emailu
        //trim vystrihne vsetky medzery na zaciatku a konci
        if(trim($_POST["email"]) == "") {
            $error["email"] = true;
        }

        //kontrola hesla
        if(trim($_POST["passwd"])  == "") {
            $error["passwd"] = true;
        }

        //kontrola mena
        if(trim($_POST["fname"])  == "") {
            $error["fname"] = true;
        }

        //kontrola priezviska
        if(trim($_POST["lname"])  == "") {
            $error["lname"] = true;
        }
    }

    if( count($_POST) != 0 && !$error["email"] && !$error["passwd"] && !$error["fname"] && !$error["lname"] ) {
        $error["checked"] = true;
    } else {
        $error["checked"] = false;
    }

    //ulozenie do databazy

    if( $error["checked"] ) {
        $sql = "INSERT INTO users (email, passwd, fname, lname)
        VALUES ('$email', '$passwd', '$fname', '$lname')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  
        mysqli_close($conn);
    } else {
        echo "Chybny formular!!!";
    }

    /*
    $stm = $con -> prepare("INSERT INTO users(email, passwd, fname, lname) 
    VALUES (?, ?, ?, ?)");
    $stm -> bind_param("ssss", $email, $passwd, $fname, $lname);
    $stm -> execute();

    echo "Registration successfully...";

    $stm -> close();
    $con -> close();
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/sign-up.css">

    <title>sign-up</title>
</head>
<body>
    <div id="content">
        <div id="sign-up">
            <div id="sign-up-header">
                <div id="sign-up-title">Sign-up</div>
                <a href="../../../index.php"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
            </div>
            <form action="" method="post" id="sign-up-formular">
                <input type="text" id="email" name="email" 
                placeholder="E-mail" value="<?= $_POST['email'] ?>">

                <input type="password" id="password" name="passwd" 
                placeholder="Heslo" value="<?= $_POST['passwd'] ?>">

                <!--
                <input type="password" id="co-password" name="co_passwd" 
                placeholder="Potvrd heslo" value="<?= $_POST['co_passwd'] ?>">
                -->

                <input type="text" id="fname" name="fname" 
                placeholder="Meno" value="<?= $_POST['fname'] ?>">

                <input type="text" id="lname" name="lname" 
                placeholder="Priezvisko" value="<?= $_POST['lname'] ?>">

                <!-- -->
                <select id="gender" name="gender">
                    <option value="0">Vyber pohlavie</option>
                    <?php foreach($options as $option): ?>
                        <option value="<?= $gender["id"] ?>"
                            <?php if($_POST["gender"] == $gender["id"]): ?>
                                selected
                            <?php endif ?>
                        >
                            <?= $option["name"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <!-- -->

                <!--
                <input type="number" id="age" name="age" 
                placeholder="Vek">

                <input type="number" id="height" name="height" 
                placeholder="Vyska">

                <input type="number" id="weight" name="weight" 
                placeholder="Vaha">
                -->

                <input type="submit" id="bt-login" name="submit" 
                value="Register">
            </form>
            <div id="sign-up-footer">
                <a href="../log-in/log-in.php" id="new-account">Already have an account</a>
            </div>
        </div>
    </div>

    <div id="sign-up-header"></div>
</body>
</html>