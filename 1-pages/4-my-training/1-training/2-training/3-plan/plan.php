<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'plan';
    $page_styles = 'styles/plan.css';
    $up = '../';
    $curPageLink = '../3-plan/plan.php';

    //pripojenie header casti
    include('../../layout/header.php');

    // ak nie som prihlaseny presmeruje naspat
    if( $_SESSION['login'] == false ){
        header("Location: ../training.php");
    }
    
    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/3-plan/plan.php";
    $idUser = $_SESSION["idUser"];

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');
    require_once ('planHelp.php');

    $userInfo = mySQLassoc($conn, "SELECT * FROM users WHERE idUser=$idUser");
    $body_mass = ( ($userInfo["weight"]) / (pow($userInfo["height"], 2)) ) * 10000;

    //prva aktivita pouzivatela
    $activity = mySQLall($conn, "SELECT * FROM useractivity WHERE userId='$idUser'");
    $activityFirst = $activity[0]["date"];
    $activity = mySQLall($conn, "SELECT count(*) AS activityCount FROM useractivity WHERE userId='$idUser'");
    $activityCount = $activity[0]["activityCount"];

    $plans = mySQLall($conn, "SELECT * FROM plans");

    //$row = mySQLall($conn, "SELECT * FROM users");
    //$userPlan = $row["planId"];

    //$activityCount = 1;

    //ak nema aktivitu, dostane obycajny plan
    if( $activityCount == 0 ){
        $userPlan = $plans[0];
    }
    if( $activityCount > 0 ){
        $status = status($conn, $idUser);
        $plan = getPlanForMe($status);
        $offen = offen($conn, $idUser);
        //$plan = 2;
        $userPlan = $plans[$plan];
    }
    
        $sql = "UPDATE users SET planId='$plan' WHERE idUser='$idUser'";

        mysqli_query($conn, $sql);

        if (mysqli_query($conn, $sql)) {
            
        } else {
            echo "Chyba pridania planu!";
        }
  
        mysqli_close($conn);

?>


    <div id="content">
        <section id="plan">

            <article id="main">
                
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="../training.php" class="bt-arrow">ukončiť</a>
                </div>

                <div id="main-content">
                    <div id="content-title">Treningový plán</div>
                    <div id="plan-content">
                        <?php if( $body_mass <= 30 ): ?>
                            <div class="info">
                                <div class="info-name">pred:</div>
                                <div class="info-text">zahrievačka, kĺbová rozcvička, dynamický strečing</div>
                            </div>

                            <div class="info">
                                <div class="info-name">po:</div>
                                <div class="info-text">statický strečing</div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>

                <div id="filter">
                    <?php
                        if( $body_mass > 30 ){
                            echo "<div class='rText'> Máš obezitu! </div>";
                            echo "<div class='filter-info weight'> Nemôžem ti pomôct. Vyhľadaj si prosím odborníka. </div>";
                        }
                        if( $body_mass <= 30 ){
                            //echo "<div class=''> OK (dobra vaha) </div>";

                            if( $activityCount == 0 ){
                                echo "<div class='oText'> Nevyplnil si ešte žiadnu aktivitu! </div>";
                                echo "<div class='filter-info activity'> Nemôžem ti dobre poradiť. Mám pre teba jednoduchý tréningový plán. </div>";
                            }

                            if( $activityCount > 0 ){
                                getHowOffen($plan, $offen);
                            }

                        }

                        //echo $status;
                    ?>
                </div>

                <?php if( $body_mass <= 30 ): ?>
                    <table id="table-plan">
                        <!-- <tr>
                            <td id="zeroBunka"></td>
                            <td >tréning</td>
                        </tr> -->
                        <tr>
                            <td>PO</td>
                            <td id="mainBunka">
                                <a href="" class="part cali"> <?php echo $userPlan["monC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["monS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>UT</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["tueC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["tueS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>ST</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["wedC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["wedS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>ŠT</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["thuC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["thuS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>PI</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["friC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["friS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>SO</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["satC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["satS"] ?> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>NE</td>
                            <td>
                                <a href="" class="part cali"> <?php echo $userPlan["sunC"] ?> </a>
                                <a href="" class="part stre"> <?php echo $userPlan["sunS"] ?> </a>
                            </td>
                        </tr>
                    </table>
                <?php endif ?>


                <?php if( $body_mass <= 30 ): ?>
                    <div id="explanations">
                        <div class="note cali">full - celé telo</div>
                        <div class="note cali">pull - príťah </div>
                        <div class="note cali">push - tlak</div>
                        <div class="note cali">core - jadro</div>
                        <div class="note cali">legs - nohy</div>
                        <div class="note cali">hand - ruky, ramená</div>
                        <div class="note stre">static - statický strečing</div>
                        <div class="note stre">back - chrbát</div>
                        <div class="note stre">hand - ruky, zápästie</div>
                        <div class="note stre">leg - nohy</div>
                        <div class="note stre">bridge - mostík</div>
                        <div class="note stre">split - šnúra</div>
                    </div>
                <?php endif ?>
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