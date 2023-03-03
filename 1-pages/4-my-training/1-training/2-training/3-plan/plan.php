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

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');
    require_once ('planHelp.php');


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

                <table id="table-plan">
                    <tr>
                        <td id="zeroBunka"></td>
                        <td>kalistenika / strecing</td>
                    </tr>
                    <tr>
                        <td>PO</td>
                        <td></td>
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
                    <div class="note">pull - príťah </div>
                    <div class="note">push - tlak</div>
                    <div class="note">core - jadro</div>
                    <div class="note">leg - nohy</div>
                    <div class="note">back - chrbát</div>
                    <div class="note">hand - ruky, zápästie</div>
                    <div class="note">neck - krk</div>
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