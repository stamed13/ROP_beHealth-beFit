<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';
    $curPageLink = '../1-activity/activity.php#main';

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
            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="#cali" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vpravo.svg" alt="hopa"></a>
                </div>
                <div id="main-content">
                    <div id="content-title">Moja aktivita</div>
                    <div id="activity-info">
                        Nech sa paci,  tu mozes postupne vyplnit tvoju dennu aktivitu. 
                        Pokojne si aktualizuj v priebehu dna. <?php //echo $_SESSION['email'] ?>
                    </div>
                </div>
                <!--
                <div class="exercise">
                    <h1>NOHY</h1>
                    <?php foreach($streLegs as $caliPull): ?>
                        <div><?= $caliPull["name"] ?></div>
                    <?php endforeach ?>
                </div>
                -->
            </article>









            <article class="form" id="cali">
                <div class="buttons-arrow">
                    <a href="#main" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vlavo.svg" alt="hopa"></a>
                    <a href="#stretch" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vpravo.svg" alt="hopa"></a>
                </div>
                <div class="form-content">
                    <div class="form-title">Posilovanie</div>

                    <?php //debug($_POST, "formular [data]"); ?>

                    <form action="" method="post" id="calisthenics">

                    <?php
                    // ak nevyplnil apon jeden cvik 
                    if( $_POST["pull"] == 0 && $_POST["push"] == 0 
                    && $_POST["legC"] == 0 && $_POST["core"] == 0 ){
                        $errors["checked"] = true;
                    } 
                    // ak vyplnil apon jeden cvik
                    else {
                        $errors["checked"] = false;
                    }

                    $activity = 0;
                    //$errors["success"] = true;

                    errorCALI($errors); 
                    warningCALI($errors);
                    infoCALI($errors);

                    

                    $calisthenics = [
                        "pull" => $_POST["pull"],
                        "push" => $_POST["push"],
                        "legC" => $_POST["legC"],
                        "core" => $_POST["core"],
                    ];

                    //saveActivity($conn, $calisthenics, $errors);

                    $idUSer = $_SESSION['idUser'];
                    $pull = $calisthenics["pull"];
                    $push = $calisthenics["push"];
                    $core = $calisthenics["core"];
                    $legC = $calisthenics["legC"];

                    echo $pull;
                    echo $push;
                    echo $core;
                    echo $legC;

                    //premenna, ktora obsahuje uzivatelovu dnesnu aktivitu
                    //$activity = mySQLassoc($conn, "SELECT * FROM useractivity 
                    //WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");

                    // zistenie obtiaznosti cviku danej oblasti posilovania
                    if( $pull > 0 ){
                        //$row = mySQLassoc($conn, "SELECT * FROM exercises WHERE idExercise='$pull'");
                        //$pull = $row["levelId"];
                    }
                    if( $push > 0 ){
                        //$row = mySQLassoc($conn, "SELECT * FROM exercises WHERE idExercise='$push'");
                        //$push = $row["levelId"];
                    }
                    if( $core > 0 ){
                        //$row = mySQLassoc($conn, "SELECT * FROM exercises WHERE idExercise='$core'");
                        //$core = $row["levelId"];
                    }
                    if( $legC > 0 ){
                        //$row = mySQLassoc($conn, "SELECT * FROM exercises WHERE idExercise='$leg'");
                        //$leg = $row["levelId"];
                    }
                


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
                    
                        // vytvorenie aktivity z cvikov posilovania
                        if( $_POST['saveCali'] ){
                            //echo "Odoslany formular. ";
                        
                            // kontrola formularu
                            if( $errors["checked"] == false ) {
                                //echo "Spravny formular.";
                            
                                $sql = "INSERT INTO useractivity (date, userId, pullCa, pushCa, coreCa, legCa) 
                                VALUES ( (SELECT CURDATE()), $idUSer, $pull, $push, $core, $legC )";

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
                        if( $_POST['saveCali'] ){
                            //echo "Odoslany formular. ";

                            // kontrola formularu
                            if( $errors["checked"] == false ) {
                                //echo "Spravny formular.";

                                $sql = "UPDATE useractivity SET pullCa='$pull', pushCa='$push', coreCa='$core', 
                                legCa='$legC' WHERE userId='$idUSer' AND (date=(SELECT CURDATE()))";

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

                    ?>

                    <select id="calisthenics" name="pull" 
                        class="" >
                            <option value="0">Vyber cvik na pritah</option>
                            <?php foreach($caliPulls as $caliPull): ?>
                                <option value="<?= $caliPull["idExercise"] ?>"
                                    <?php 
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    //ak dnes nemam aktivitu, oznacim vyber z metody POST
                                    if( $errors["activity"] == false ){
                                        if($_POST["pull"] == $caliPull["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    //ak uz mam aktivitu, predznacim vyber z aktivity
                                    if( $errors["activity"] == true ){
                                        if($activity["pullCa"] == $caliPull["idExercise"]) { 
                                            echo "selected";
                                            //$_POST["pullCa"] = $activity["pullCa"];
                                        }
                                    } 
                                    ?>
                                >
                                    <?= $caliPull["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="calisthenics" name="push" 
                        class="" >
                            <option value="0">Vyber cvik na tlak</option>
                            <?php foreach($caliPushs as $caliPush): ?>
                                <option value="<?= $caliPush["idExercise"] ?>"
                                    <?php 
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    if( $errors["activity"] == false ){
                                        if($_POST["push"] == $caliPush["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    if( $errors["activity"] == true ){
                                        if($activity["pushCa"] == $caliPush["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    ?>
                                >
                                    <?= $caliPush["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="calisthenics" name="core" 
                        class="" >
                            <option value="0">Vyber cvik na brucho</option>
                            <?php foreach($caliCores as $caliCore): ?>
                                <option value="<?= $caliCore["idExercise"] ?>"
                                    <?php 
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    if( $errors["activity"] == false ){
                                        if($_POST["core"] == $caliCore["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    if( $errors["activity"] == true ){
                                        if($activity["coreCa"] == $caliCore["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    ?>
                                >
                                    <?= $caliCore["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="calisthenics" name="legC" 
                        class="" >
                            <option value="0">Vyber cvik na nohy</option>
                            <?php foreach($caliLegs as $caliLeg): ?>
                                <option value="<?= $caliLeg["idExercise"] ?>"
                                <?php 
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    if( $errors["activity"] == false ){
                                        if($_POST["legC"] == $caliLeg["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    if( $errors["activity"] == true ){
                                        if($activity["legCa"] == $caliLeg["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    ?>
                                >
                                    <?= $caliLeg["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <input type="submit" class="bt-save" name="saveCali" 
                        value="Uložiť">

                    </form>
                </div>
            </article>








            <article class="form" id="stretch">
                <div class="buttons-arrow">
                    <a href="#cali" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vlavo.svg" alt="hopa"></a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>
                <div class="form-content">
                    <div class="form-title">Strecing</div>

                    <?php //debug($_POST, "formular [data]"); ?>

                    <form action="" method="post" id="stretch">

                    <?php
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

                    errorSTRETCH($errors); 
                    //warningCALI($errors);
                    infoSTRETCH($errors);

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

                    echo $neck;
                    echo $hand;
                    echo $back;
                    echo $leg;

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

                    ?>
  
                        <select id="stretching" name="neck" 
                        class="" >
                            <option value="0">Vyber cvik na krk</option>
                            <?php foreach($streNecks as $streNeck): ?>
                                <option value="<?= $streNeck["idExercise"] ?>"
                                    <?php 
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    //ak dnes nemam aktivitu, oznacim vyber z metody POST
                                    if( $errors["activity"] == false ){
                                        if($_POST["neck"] == $streNeck["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    //ak uz mam aktivitu, predznacim vyber z aktivity
                                    if( $errors["activity"] == true ){
                                        if($activity["neckSt"] == $streNeck["idExercise"]) { 
                                            echo "selected";
                                        }
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
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    //ak dnes nemam aktivitu, oznacim vyber z metody POST
                                    if( $errors["activity"] == false ){
                                        if($_POST["hand"] == $streHand["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    //ak uz mam aktivitu, predznacim vyber z aktivity
                                    if( $errors["activity"] == true ){
                                        if($activity["handSt"] == $streHand["idExercise"]) { 
                                            echo "selected";
                                        }
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
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    //ak dnes nemam aktivitu, oznacim vyber z metody POST
                                    if( $errors["activity"] == false ){
                                        if($_POST["back"] == $streBack["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    //ak uz mam aktivitu, predznacim vyber z aktivity
                                    if( $errors["activity"] == true ){
                                        if($activity["backSt"] == $streBack["idExercise"]) { 
                                            echo "selected";
                                        }
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
                                    $errors["activity"] = mySQLcheck($conn, "SELECT * FROM useractivity 
                                    WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");
                                    //ak dnes nemam aktivitu, oznacim vyber z metody POST
                                    if( $errors["activity"] == false ){
                                        if($_POST["leg"] == $streLeg["idExercise"]) { 
                                            echo "selected";
                                        }
                                    } 
                                    //ak uz mam aktivitu, predznacim vyber z aktivity
                                    if( $errors["activity"] == true ){
                                        if($activity["legSt"] == $streLeg["idExercise"]) { 
                                            echo "selected";
                                        }
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