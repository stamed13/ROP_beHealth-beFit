<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';
    $curPageLink = '../1-activity/activity1.php#main';

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


</body>

</html>