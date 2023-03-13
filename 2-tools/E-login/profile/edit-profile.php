<?php
    //aktualna stranka
    $currentPage = 'edit-profile';
    $page_styles = 'styles/edit-profile.css';

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');
    require_once ('profileHelp.php');

    //pripojenie header casti
    include('layout/header.php');

    //$_SESSION["location"] = "../profile/profile.php";

    //session_destroy();

    $genders =  mySQLall($conn, "SELECT * FROM genders");


    // nove udaje
    $email = $_POST['email'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $co_passwd = password_hash($_POST['co_passwd'], PASSWORD_DEFAULT);
    $fname = ucfirst($_POST['fname']);
    $lname = ucfirst($_POST['lname']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    // aktualne udaje
    $emailA = $_SESSION['email'];
    $passwdA = "";
    $fnameA = "";
    $lnameA = "";
    $genderA = "";
    $ageA = "";
    $heightA = "";
    $weightA = "";

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
        || ( mySQLall($conn, "SELECT email FROM users WHERE email='$email' ") && $email != $emailA ) ) {
            $errors["email"] = true;
        } 

        //kontrola hesla
        if( trim($_POST["passwd"])  != "" && strlen( trim($_POST["passwd"]) ) < 8 
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

        //kontrola veku
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
        if( $_POST["weight"]  == 0 || $_POST["weight"] < 30 
        || $_POST["weight"] > 220 ) {
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
        $sql = "UPDATE users SET email='$email', passwd='$passwd', fname='$fname', lname='$lname',
        genderId='$gender', age='$age', height='$height', weight='$weight' WHERE email='$email'";

        //$sql = "UPDATE users SET email='$email', passwd='$passwd', fname='$fname', lname='$lname',
        //genderId='$gender', age='$age', height='$height', weight='$weight' WHERE email='$email';";
        mysqli_query($conn, $sql);

        if (mysqli_query($conn, $sql)) {
            $errors["registered"] = true;
        } else {
            $errors["registered"] = false;
        }
  
        mysqli_close($conn);

        header("Location: profile.php");
    } 

?>

    <div id="content">
        <section id="profile">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="profile.php" class="bt-arrow">naspäť</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Upraviť profil</div>
                    <div id="profile-content">
                        
                    <form action="" method="post" id="sign-up-formular">
                        <?php errorLOG($conn); ?>
                        <?php register($errors); ?>

                        <input type="text" id="email" 
                        class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                        name="email" placeholder="E-mail" 
                        value="<?php 
                        if($_POST["email"] == ""){
                            echo $_SESSION['email'];
                        } else {
                            echo $_POST["email"];
                        }
                         ?>">

                        <?php //echo addClass( ($errors["email"]),  $eBorder); ?>

                        <input type="password" id="password" 
                        class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                        name="passwd" placeholder="Heslo" 
                        value="<?= $_POST["passwd"] ?>">

                        <input type="password" id="co-password" 
                        class="<?php echo addClass( $errors["co_passwd"], $classes["eBorder"] ); ?>" 
                        name="co_passwd" placeholder="Potvrď heslo" value="<?= $_POST["co_passwd"] ?>">

                        <input type="text" id="fname" 
                        class="<?php echo addClass( $errors["fname"], $classes["eBorder"] ); ?>" 
                        name="fname" placeholder="Meno" 
                        value="<?php 
                        if($_POST["fname"] == ""){
                            echo fname($conn);
                        } else {
                            echo $_POST["fname"];
                        }
                        ?>">

                        <input type="text" id="lname" 
                        class="<?php echo addClass( $errors["lname"], $classes["eBorder"] ); ?>" 
                        name="lname" placeholder="Priezvisko" 
                        value="<?php 
                        if($_POST["lname"] == ""){
                            echo lname($conn);
                        } else {
                            echo $_POST["lname"];
                        }
                        ?>">

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
                        name="age" placeholder="Vek" 
                        class="<?php echo addClass( $errors["age"], $classes["eBorder"] ); ?>" 
                        value="<?php 
                        if($_POST["age"] == ""){
                            echo age($conn);
                        } else {
                            echo $_POST["age"];
                        }
                         ?>">

                        <input type="number" id="height" 
                        name="height" placeholder="Vyska" 
                        class="<?php echo addClass( $errors["height"], $classes["eBorder"] ); ?>" 
                        value="<?php 
                        if($_POST["height"] == ""){
                            echo height($conn);
                        } else {
                            echo $_POST["height"];
                        }
                         ?>">

                        <input type="number" id="weight" 
                        name="weight" placeholder="Vaha" 
                        class="<?php echo addClass( $errors["weight"], $classes["eBorder"] ); ?>"
                        value="<?php 
                        if($_POST["weight"] == ""){
                            echo weight($conn);
                        } else {
                            echo $_POST["weight"];
                        }
                         ?>">

                        <input type="submit" id="bt-register" name="submit" 
                        value="Update">
                    </form>
                        
                    </div>
                </div>
            </article>
            
        </section>

    </div>
    
<?php
    //pripojenie footer casti
    include('layout/footer.php');
?>

</body>

</html>