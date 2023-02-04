<?php
    //aktualna stranka
    $currentPage = 'edit-profile';
    $page_styles = 'styles/edit-profile.css';

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    //pripojenie header casti
    include('layout/header.php');

    //$_SESSION["location"] = "../profile/profile.php";

    //session_destroy();
?>

    <div id="content">
        <section id="profile">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="profile.php" class="bt-arrow">naspäť</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Upravit profil</div>
                    <div id="profile-content">
                        
                    <form action="" method="post" id="sign-up-formular">
                        <?php //errorLOG($conn); ?>
                        <?php //register($errors); ?>

                        <input type="text" id="email" 
                        class="<?php echo addClass( $errors["email"], $classes["eBorder"] ); ?>"  
                        name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>">

                        <?php //echo addClass( ($errors["email"]),  $eBorder); ?>

                        <input type="password" id="password" 
                        class="<?php echo addClass( $errors["passwd"], $classes["eBorder"] ); ?>" 
                        name="passwd" placeholder="Heslo" value="<?= $_POST["passwd"] ?>">

                        <input type="password" id="co-password" 
                        class="<?php echo addClass( $errors["co_passwd"], $classes["eBorder"] ); ?>" 
                        name="co_passwd" placeholder="Potvrd heslo" value="<?= $_POST["co_passwd"] ?>">

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
                        name="height" placeholder="Vyska" value="<?= $_POST['height'] ?>"
                        class="<?php echo addClass( $errors["height"], $classes["eBorder"] ); ?>" >

                        <input type="number" id="weight" 
                        name="weight" placeholder="Vaha" value="<?= $_POST['weight'] ?>"
                        class="<?php echo addClass( $errors["weight"], $classes["eBorder"] ); ?>" >

                        <input type="submit" id="bt-register" name="submit" 
                        value="Register">
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