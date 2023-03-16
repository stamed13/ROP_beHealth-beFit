<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'advice';
    $page_styles = 'styles/advice.css';
    $up = '../';
    $curPageLink = '../2-advice/advice.php';

    //pripojenie header casti
    include('../../layout/header.php');

    // ak nie som prihlaseny presmeruje naspat
    if( $_SESSION['login'] == false ){
        header("Location: ../training.php");
    }

    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/2-advice/advice.php";
    $idUser = $_SESSION["idUser"];

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');
    //require_once ('adviceHelp.php');
    require_once ('adviceHelp1.php');
    require_once ('adviceHelp2.php');
    require_once ('adviceHelp3.php');
    require_once ('adviceHelp4.php');
    require_once ('adviceHelp5.php');
    require_once ('adviceHelp6.php');

    $userInfo = mySQLassoc($conn, "SELECT * FROM users WHERE idUser=$idUser");
    $body_mass = ( ($userInfo["weight"]) / (pow($userInfo["height"], 2)) ) * 10000;

    //$caliPulls =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='1'");
    $advices = mySQLall($conn, "SELECT * FROM advice");

    //prva aktivita pouzivatela
    $activity = mySQLall($conn, "SELECT * FROM useractivity WHERE userId='$idUser'");
    $activityFirst = $activity[0]["date"];    

    //pocet aktivit pouzivatela
    $activity = mySQLall($conn, "SELECT count(*) AS activityCount FROM useractivity WHERE userId='$idUser'");
    $activityCount = $activity[0]["activityCount"];


?>


    <div id="content">
        <section id="advice">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="../training.php" class="bt-arrow">ukončiť</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Rady a typy</div>
                    <div id="hello-user">
                        Dobrý deň <?php if(isset($_SESSION['fullname'])){echo $_SESSION['fullname'];} ?>!
                    </div>
                </div>
                <div id="advice-list">
                    <?php 
                        adviceWeight($advices, $body_mass); 
                        
                        if( $body_mass < 30 ){
                            if( $activityFirst > 0 ){
                                if( $activityCount == 1 ){
                                    echo "<div class='advice'> Máš len jednu aktivitu. </div>";
                                }

                                adviceExercise($advices, $conn, $idUser);
                                adviceImprove($advices, $conn, $idUser);
                                adviceStatus($advices, $conn, $idUser);
                                adviceDaily($advices, $conn, $idUser);
                                adviceLifestyle($advices, $conn, $idUser);
                            } 
                            //nema aktivitu, ostatne neporadi
                            if( $activityFirst == 0 ) {
                                echo "<div class='advice'> Viac ti nedokážem poradiť. Vyplň prosím aspoň jednu aktivitu. </div>";
                            }
                        }
                    ?>
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