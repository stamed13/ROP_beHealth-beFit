<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';
    $curPageLink = '../1-activity/activity.php#main';

    //pripojenie header casti
    include('../../layout/header.php');

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');

//    debug($_POST, "formular [data]");

    //daj to cali a druhe stretch... 
    $caliPulls =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='1'");
    $caliPushs =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='1'");
    $caliLegs =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='3'");
    $caliCores =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='4'");
    $streNecks =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='5'");
    $streHands =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='6'");

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
                        Pokojne si aktualizuj v priebehu dna.
                    </div>
                </div>
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

                        <input type="submit" class="bt-save" name="save" 
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
    
                    <select id="stretching" name="neck" 
                        class="" >
                            <option value="0">Vyber cvik na krk</option>
                            <?php foreach($streNecks as $streNeck): ?>
                                <option value="<?= $streNeck["idExercise"] ?>"
                                    <?php if($_POST["neck"] == $streNeck["idExercise"]) { ?>
                                        streNeck
                                    <?php } ?>
                                >
                                    <?= $streNeck["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                                    
                        <select id="stretching" name="hand" 
                        class="" >
                            <option value="0">Vyber cvik na ruky</option>
                            <?php foreach($streHands as $castreHandliCore): ?>
                                <option value="<?= $streHand["idExercise"] ?>"
                                    <?php if($_POST["hand"] == $streHand["idExercise"]) { ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?= $streHand["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                                    
                        <input type="submit" class="bt-save" name="save" 
                        value="Uložiť">
                                    
                    </form>
                </div>
            </article>
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