<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once('../helper/config.php');
    require_once "../helper/Helper.php";
    require_once('fetch-data.php');

    debug($_POST, "formular [data]");

    debug($errors, "errors [data]");

    //polozky
    $email = $_POST['email'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $co_passwd = password_hash($_POST['co_passwd'], PASSWORD_DEFAULT);
    $fname = ucfirst($_POST['fname']);
    $lname = ucfirst($_POST['lname']);
    $gender = $_POST['gender'];

    //kontrola
    $errors = [
        "checked" => false,
        "email" => false,
        "passwd" => false,
        "co_passwd" => false,
        "fname" => false,
        "lname" => false,
        "gender" => false,
    ];

    $classes = [
        "eBorder" => "eBorder",
    ];

    // ak bol formular vypleny
    if( count($_POST) != 0 ) {
        //kontrola emailu
        //trim vystrihne vsetky medzery na zaciatku a konci
        if( trim($_POST["email"]) == "" || 
        ! (filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( trim($_POST["passwd"])  == "") {
            $errors["passwd"] = true;
        }

        //potvrdenie hesla
        if( trim($_POST["co_passwd"])  != trim($_POST["passwd"]) ) {
            $errors["co_passwd"] = true;
        }

        //kontrola mena
        if( trim($_POST["fname"])  == "" ) {
            $errors["fname"] = true;
        }

        //kontrola priezviska
        if( trim($_POST["lname"])  == "" ) {
            $errors["lname"] = true;
        }

        //kontrola pohlaia
        if( trim($_POST["gender"])  == "" ) {
            //$errors["gender"] = true;
        }
    }

    if( count($_POST) != 0 && !$errors["email"] && !$errors["passwd"] && !$errors["co_passwd"] 
    && !$errors["fname"] && !$errors["lname"] && !$errors["gender"] ) {
        $errors["checked"] = true;
    } else {
        $errors["checked"] = false;
    }

    //ulozenie do databazy

    if( $errors["checked"] ) {
        $sql = "INSERT INTO users (email, passwd, fname, lname, gender_id)
        VALUES ('$email', '$passwd', '$fname', '$lname', '$gender')";

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

                <input type="text" id="email" 
                class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>" name="email" 
                placeholder="E-mail" value="<?= $_POST["email"] ?>">

                <?php //echo addClass( ($errors["email"]),  $eBorder); ?>

                <!--
                <input type="text" id="email" class="error-border" name="email" 
                placeholder="E-mail" value="<?= $_POST['email'] ?>"
                class="error-border"
                class="<?php if($errors["email"]): ?> error-border <?php endif ?>" >
                -->

                <?php 
                    /*
                    if($error["email"]) {
                        echo "error-border";
                    } 
                    */
                ?>

                <input type="password" id="password" name="passwd" 
                placeholder="Heslo" value="<?= $_POST['passwd'] ?>"
                >

                <!-- -->
                <input type="password" id="co-password" name="co_passwd" 
                placeholder="Potvrd heslo" value="<?= $_POST['co_passwd'] ?>"
                >
                <!-- -->

                <input type="text" id="fname" name="fname" 
                placeholder="Meno" value="<?= ucfirst($_POST['fname']) ?>"
                >

                <input type="text" id="lname" name="lname" 
                placeholder="Priezvisko" value="<?= ucfirst($_POST['lname']) ?>"
                >

                <!-- -->
                <select id="gender" name="gender" >
                    <option value="0">Vyber pohlavie</option>
                    <?php foreach($genders as $gender): ?>
                        <option value="<?= $gender["id"] ?>"
                            <?php if($_POST["gender"] == $gender["id"]) { ?>
                                selected
                            <?php } ?>
                        >
                            <?= $gender["name"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <!-- -->

                <!-- -->
                <input type="number" id="age" name="age" 
                placeholder="Vek">

                <input type="number" id="height" name="height" 
                placeholder="Vyska">

                <input type="number" id="weight" name="weight" 
                placeholder="Vaha">
                <!-- -->

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