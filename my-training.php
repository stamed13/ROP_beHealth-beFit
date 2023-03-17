<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'my-training';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../my-training.php";

    require_once ('2-tools/E-login/helper/config.php');
    require_once ('2-tools/E-login/helper/Helper.php');

    $idUSer = $_SECTION["idUSer"];
?>

    <div id="content">
        <section id="training">
            <article id="main">
                <div id="content-title">Môj tréning</div>
                <div id="training-info">
                    Môj tréning umožňuje zápis dennej aktivity, vyhodnotenie a tréningový plán.
                </div>
                <div>
                    <?php
                        // ak nie som prihlaseny upozornim, ze sa potrebuje prihlasit
                        if( $_SESSION['login'] == false ){
                            echo "<div class='oText'>Prihlás sa prosím. Potom ti sprístupním všetky funkcie.</div>";
                        }

                        //ak som prihlaseny
                        if( $_SESSION['login'] == true ){
                            //zistenie ci ma dnes vyplnenu aktivitu
                            $activityActual = $activity = mySQLall($conn, "SELECT * FROM useractivity 
                            WHERE (userId='$idUSer') AND (date=(SELECT CURDATE()))");

                            //ak nema dnes aktivitu upozornim, ze moze vyplnit
                            if( $activityActual == false ){
                                //echo "<div class='oText'>Dnes este nemáš vyplnenú aktivitu. Vyplň ju prosím!</div>";
                            }

                            //echo $activityActual;
                        }
                    ?>
                </div>
            </article>
            <article id="training-menu">
            <a id="bt-training" href="1-pages/4-my-training/1-training/2-training/training.php">Tréning</a>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>


</body>

</html>