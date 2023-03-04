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
    $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

    $plans = mySQLall($conn, "SELECT * FROM plans");

    //$row = mySQLall($conn, "SELECT * FROM users");
    //$userPlan = $row["planId"];

?>


    <div id="content">
        <section id="plan">

            <article id="main">
                
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>

                <div id="main-content">
                    <div id="content-title">Treningový plán</div>
                    <div id="plan-content">
                        
                    </div>
                </div>

                <?php
                    if( $body_mass > 30 ){
                        echo "<div class=''> Mas obezitu. Nemozem ti pomoct. Vyhladaj si prosim odbornika. </div>";
                    }
                    if( $body_mass <= 30 ){
                        echo "<div class=''> OK </div>";

                        if( $activityCount == 0 ){
                            echo "<div class=''> nemas aktivitu </div>";
                        }

                        if( $activityCount > 0 ){
                            echo "<div class=''> mas aktivitu </div>";
                        }
                    }
                ?>

                <table id="table-plan">
                    <tr>
                        <td id="zeroBunka"></td>
                        <td>kalistenika / strecing</td>
                    </tr>
                    <tr>
                        <td>PO</td>
                        <td> <?php echo $plans[0]["mon"] ?> </td>
                    </tr>
                    <tr>
                        <td>UT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ST</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ŠT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PI</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SO</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>NE</td>
                        <td></td>
                    </tr>
                </table>

                <div id="explanations">
                    <div class="note cali">full - celé telo</div>
                    <div class="note cali">pull - príťah </div>
                    <div class="note cali">push - tlak</div>
                    <div class="note cali">core - jadro</div>
                    <div class="note cali">legs - nohy</div>
                    <div class="note stre">back - chrbát</div>
                    <div class="note stre">hand - ruky, zápästie</div>
                    <div class="note stre">legs - nohy</div>
                    <div class="note stre">bridge - mostík</div>
                    <div class="note stre">split - šnúra</div>
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