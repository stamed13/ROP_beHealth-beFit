<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';
    $curPageLink = '../1-activity/activity3.php#stretch';

    //pripojenie header casti
    include('../../layout/header.php');

    // ak nie som prihlaseny presmeruje naspat
    if( $_SESSION['login'] == false ){
        header("Location: ../training.php");
    }

    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/1-activity/activity.php#main";

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');
    require_once ('activityHelp.php');

    //debug($_POST, "formular [data]");

    //vyber vsetkych cvikov podla kategorii
    $caliPulls =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='1'");
    $caliPushs =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='2'");
    $caliLegs =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='3'");
    $caliCores =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='4'");
    $streNecks =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='5'");
    $streHands =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='6'");
    $streBacks =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='7'");
    $streLegs =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='8'");
   

    $errors = [
        "checked" => false,
        "success" => false,
        "activity" => false,
        "email" => false,
        "passwd" => false,
        "loged" => false,
    ];

    //saveActivity($conn, $calisthenics, $errors);

    $activity = 0;
    
?>









    <div id="content">
        <section id="activity">
            <article class="form" id="stretch">
                <div class="buttons-arrow">
                    <a href="activity2.php" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vlavo.svg" alt="hopa"></a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>
                <div class="form-content">
                    <div class="form-title">Strecing</div>

                    <?php //debug($_POST, "formular [data]"); ?>

                    <form action="" method="post" id="stretch">

                    <?php
                    $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

                    // ak nevyplnil vsetky cviky
                    if( $activityCount["count"] == 0 || $activityCount["count"] == 1 ){
                        if( $_POST["neck"] == 0 || $_POST["hand"] == 0 
                        || $_POST["back"] == 0 || $_POST["leg"] == 0 ){
                            $errors["checked"] = true;
                        }
                    }
                    // ak nevyplnil apon jeden cvik 
                    if( $_POST["neck"] == 0 && $_POST["hand"] == 0 
                    && $_POST["back"] == 0 && $_POST["leg"] == 0 ){
                        $errors["checked"] = true;
                    } 
                    // ak vyplnil apon jeden cvik
                    else {
                        $errors["checked"] = false;
                    }

                    $activity = 0;
                    //$errors["success"] = true;

                    errorSTRETCH($errors, $conn); 
                    warningSTRE($errors, $conn);
                    infoSTRETCH($errors, $conn);

                    $stretching = [
                        "neck" => $_POST["neck"],
                        "hand" => $_POST["hand"],
                        "back" => $_POST["back"],
                        "leg" => $_POST["leg"],
                    ];

                    //saveActivity($conn, $calisthenics, $errors);

                    $idUSer = $_SESSION['idUser'];
                    $neck = $stretching["neck"];
                    $hand = $stretching["hand"];
                    $back = $stretching["back"];
                    $leg = $stretching["leg"];

                    //echo $neck;
                    //echo $hand;
                    //echo $back;
                    //echo $leg;

                    //premenna, ktora obsahuje uzivatelovu dnesnu aktivitu
                    //$activity = mySQLassoc($conn, "SELECT * FROM useractivity 
                    //WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");

                    
                    /*
                    $sql = "TRUNCATE useractivity";
                    mysqli_query($conn, $sql)
                    mysqli_close($conn);    
                    */
                    

                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");

                    // ak nie je vytvorena aktivita od pouzivatela v dnesnom dni, vytvorim
                    if( $errors["activity"] == false ){
                    //if(1 == 1){
                        //echo "Dnes nie je aktivita.  ";

                        $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                        WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                    
                        // vytvorenie aktivity z cvikov posilovania
                        if( $_POST['saveStre'] ){
                            //echo "Odoslany formular. ";
                        
                            // kontrola formularu
                            if( $errors["checked"] == false ) {
                                //echo "Spravny formular.";
                            
                                $sql = "INSERT INTO useractivity (date, userId, neckSt, handSt, backSt, legSt) 
                                VALUES ( (SELECT CURDATE()), $idUSer, $neck, $hand, $back, $leg )";

                                //$sql = "SELECT CURDATE()";
                            
                                if (mysqli_query($conn, $sql)) {
                                    $errors["success"] = true;
                                    echo "<div class='gText'>Uspesne vytvorenie aktivity!</div>";
                                } else {
                                    $errors["success"] = false;
                                    echo "<div class='rText'>Neuspesne vytvorenie aktivity!</div>";
                                }
  
                                mysqli_close($conn);
                            }
                        }

                    } 
                    
                    // ak je vytvorena, aktualizujem aktivitu 
                    if( $errors["activity"] == true ){
                        //echo "Dnes uz je aktivita.  ";

                        // aktualizovanie aktivity z cvikov posilovania
                        if( $_POST['saveStre'] ){
                            //echo "Odoslany formular. ";

                            // kontrola formularu
                            if( $errors["checked"] == false ) {
                                //echo "Spravny formular.";

                                $sql = "UPDATE useractivity SET neckSt='$neck', handSt='$hand', backSt='$back', 
                                legSt='$leg' WHERE userId='$idUSer' AND (date=(SELECT CURDATE()))";

                                //$sql = "SELECT CURDATE()";

                                if (mysqli_query($conn, $sql)) {
                                    $errors["success"] = true;
                                    echo "<div class='gText'>Uspesne aktualizovanie aktivity!</div>";
                                } else {
                                    $errors["success"] = false;
                                    echo "<div class='rText'>Neuspesne aktualizovanie aktivity!</div>";
                                }
  
                                mysqli_close($conn);
                            }
                        }

                    }

                    $activity = mySQLassoc($conn, "SELECT * FROM useractivity 
                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");

                    if($activity["neckSt"] > 0){
                        $_POST["neck"] = $activity["neckSt"];
                    }
                    if($activity["handSt"] > 0){
                        $_POST["hand"] = $activity["handSt"];
                    }
                    if($activity["backSt"] > 0){
                        $_POST["back"] = $activity["backSt"];
                    }
                    if($activity["legSt"] > 0){
                        $_POST["leg"] = $activity["legSt"];
                    }

                    ?>
  
                        <select id="stretching" name="neck" 
                        class="" >
                            <option value="0">Vyber cvik na krk</option>
                            <?php foreach($streNecks as $streNeck): ?>
                                <option value="<?= $streNeck["idExercise"] ?>"
                                    <?php 
                                    // oznaci vyber z $_POST
                                    if($_POST["neck"] == $streNeck["idExercise"]) { 
                                        echo "selected";
                                    }
                                    ?>
                                >
                                    <?= $streNeck["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                                    
                        <select id="stretching" name="hand" 
                        class="" >
                            <option value="0">Vyber cvik na ruky</option>
                            <?php foreach($streHands as $streHand): ?>
                                <option value="<?= $streHand["idExercise"] ?>"
                                    <?php 
                                    // oznaci vyber z $_POST
                                    if($_POST["hand"] == $streHand["idExercise"]) { 
                                        echo "selected";
                                    }
                                    ?>
                                >
                                    <?= $streHand["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="stretching" name="back" 
                        class="" >
                            <option value="0">Vyber cvik na chrbát</option>
                            <?php foreach($streBacks as $streBack): ?>
                                <option value="<?= $streBack["idExercise"] ?>"
                                    <?php 
                                    // oznaci vyber z $_POST
                                    if($_POST["back"] == $streBack["idExercise"]) { 
                                        echo "selected";
                                    }
                                    ?>
                                >
                                    <?= $streBack["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="stretching" name="leg" 
                        class="" >
                            <option value="0">Vyber cvik na nohy</option>
                            <?php foreach($streLegs as $streLeg): ?>
                                <option value="<?= $streLeg["idExercise"] ?>"
                                    <?php 
                                    // oznaci vyber z $_POST
                                    if($_POST["leg"] == $streLeg["idExercise"]) { 
                                        echo "selected";
                                    }
                                    ?>
                                >
                                    <?= $streLeg["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                                    
                        <input type="submit" class="bt-save" name="saveStre" 
                        value="Uložiť">
                                    
                    </form>
                </div>
            </article>

            <div>
                <?php
                    // kontrola premennych
                    /*echo "pull:  "; echo $caPullVal; 
                    echo "  push:  "; echo $caPushVal;
                    echo "  leg:   "; echo $caLegVal;
                    echo "  core:  "; echo $caCoreVal;*/
                ?>
            </div>
        </section>

        
        
    </div>

<?php
    //pripojenie footer casti
    include('../../layout/footer.php');
?>


<?php 
    //kod na kontrolu a ulozenie aktivity
?>

</body>

</html>

<?php
    mysqli_close($conn);

    //$activity = mySQLassoc($conn, "SELECT * FROM useractivity 
    //WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
?>