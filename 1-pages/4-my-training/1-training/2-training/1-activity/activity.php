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

    // premenne na ulozenie stavu vyplnenia oboch formularov
    // ne bars funguje
    /*$caPullVal = $_POST["pull"];
    $caPushVal = $_POST["push"];
    $caLegVal = $_POST["leg"];
    $caCoreVal = $_POST["core"];*/
    
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

                    <?php errorCALI(); ?>
                    <?php warningCALI(); ?>
                        
                    <select id="calisthenics" name="pull" 
                        class="" >
                            <option value="0">Vyber cvik na pritah</option>
                            <?php foreach($caliPulls as $caliPull): ?>
                                <option value="<?= $caliPull["idExercise"] ?>"
                                    <?php if($_POST["pull"] == $caliPull["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
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
                                    <?php if($_POST["push"] == $caliPush["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?= $caliPush["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="calisthenics" name="leg" 
                        class="" >
                            <option value="0">Vyber cvik na nohy</option>
                            <?php foreach($caliLegs as $caliLeg): ?>
                                <option value="<?= $caliLeg["idExercise"] ?>"
                                    <?php if($_POST["leg"] == $caliLeg["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?= $caliLeg["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <select id="calisthenics" name="core" 
                        class="" >
                            <option value="0">Vyber cvik na brucho</option>
                            <?php foreach($caliCores as $caliCore): ?>
                                <option value="<?= $caliCore["idExercise"] ?>"
                                    <?php if($_POST["core"] == $caliCore["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?= $caliCore["name"] ?>
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

                    <form action="" method="post" id="calisthenics">

                    <?php //errorSTRETCH(); ?>
    
                    <select id="stretching" name="neck" 
                        class="" >
                            <option value="0">Vyber cvik na krk</option>
                            <?php foreach($streNecks as $streNeck): ?>
                                <option value="<?= $streNeck["idExercise"] ?>"
                                    <?php if($_POST["neck"] == $streNeck["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
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
                                    <?php if($_POST["hand"] == $streHand["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
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
                                    <?php if($_POST["hand"] == $streBack["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
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
                                    <?php if($_POST["hand"] == $streLeg["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?= $streLeg["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                                    
                        <input type="submit" class="bt-save" name="saveSt" 
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