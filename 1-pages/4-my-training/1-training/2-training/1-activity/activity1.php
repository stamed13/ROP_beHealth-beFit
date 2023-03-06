<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity1.css';
    $up = '../';
    $curPageLink = '../1-activity/activity1.php';

    //pripojenie header casti
    include('../../layout/header.php');

    // ak nie som prihlaseny presmeruje naspat
    if( $_SESSION['login'] == false ){
        header("Location: ../training.php");
    }

    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/1-activity/activity1.php";

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');
    //require_once ('activityHelp.php');

    //debug($_POST, "formular [data]");
    
?>









    <div id="content">
        <section id="activity">
            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="activity2.php" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vpravo.svg" alt="hopa"></a>
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
        </section>

    </div>

<?php
    //pripojenie footer casti
    include('../../layout/footer.php');
?>


</body>

</html>