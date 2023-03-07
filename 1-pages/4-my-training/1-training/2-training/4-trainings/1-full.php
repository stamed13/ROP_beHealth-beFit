<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'training';
    $page_styles = 'styles/training.css';
    $up = '../';
    $curPageLink = '../3-plan/plan.php';

    //pripojenie header casti
    include('../../layout/header.php');

    // ak nie som prihlaseny presmeruje naspat
    if( $_SESSION['login'] == false ){
        //header("Location: ../training.php");
    }
    
    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/3-plan/plan.php";
    $idUser = $_SESSION["idUser"];

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');

    $userInfo = mySQLassoc($conn, "SELECT * FROM users WHERE idUser=$idUser");
    //$body_mass = ( ($userInfo["weight"]) / (pow($userInfo["height"], 2)) ) * 10000;

?>


    <div id="content">
    <section id="type" class="cali">
            <article id="main">
                <div id="main-head">
                    <a href="" id="back">naspäť</a>
                    <div id="content-title" class="exercise-title">Exercise</div>
                </div>
                <div id="level">Level 1-3</div>
                <div id="type-info" class="exercise-info">
                    Popis
                </div>
            </article>

            <article id="beginer" class="exercises">
                <div class="exercise-title beginer">Začiatočník</div>
                <div class="exercise-info">
                    Level začiatočník je pre úplných začiatočníkov, ale dokáže poriadne potrápiť. 
                    Cviky sú jednoduché na učenie.
                </div>
                <div class="exercises-exercise">
                    <div class="exercise">
                        <div id="" class="name">skracovačky 5-10x</div>
                        <div class="info">
                            <p>
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj rukami kolien 
                            </p>
                            <p>
                            ( známy cvik, ale nie je to brušák, ten je málo užitočný )
                            </p>
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">dotýkanie členkov 5x P+Ľ</div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj raz ľavou a raz pravou rukou členku na rovnakej strane
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">sklápačky 5-10x </div>
                        <div class="info">
                            (jednoduchšia verzia)
                            ľahni si na chrbát, pokrč nohy (do 90° v kolennom aj v bedrovom kĺbe), plecia sú zatlačené, 
                            chrbát je na zemi, pomaly sa dotýkaj lakťami kolien 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">quadrupedál  5-10s</div>
                        <div class="info">
                            kľakni si na kolená, ruky sú pod pleciami, plecia sú zatlačené , pokrč nohy 
                            (do 90° aj v bedrovom kĺbe), chrbát je vystretý, vydrž v tejto polohe na špičkách
                        </div>
                    </div>

                    <div class="exercise">
                        <div class="name">oddych  60s</div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">ruské otočky  5x P+Ľ</div>
                        <div class="info">
                            (jednoduchšia verzia)
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je vystretý, 
                            pomaly rotuj do strán, raz do prava a raz do ľava a dotkni sa prstami zeme
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">plank na kolenách  30-60s</div>
                        <div class="info">
                            ľahni si na brucho, vyflexuj špičky, plecia sú zatlačené, ruky sú pokrčené (do 90° v lakťoch), 
                            predlaktie a dlane sú na zemi, chrbát je vystretý, zdvihni sa, napni zadok, vydrž v tejto pozícii 
                            (príprava na plank)
                        </div>
                    </div>
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