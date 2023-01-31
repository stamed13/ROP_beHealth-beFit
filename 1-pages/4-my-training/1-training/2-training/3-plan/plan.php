<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING
    
    //aktualna stranka
    $currentPage = 'plan';
    $page_styles = 'styles/plan.css';
    $up = '../';
    $curPageLink = '../3-plan/plan.php#main';

    //pripojenie header casti
    include('../../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/4-my-training/1-training/2-training/3-plan/plan..php#main";

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');



?>


    <div id="content">
        <section id="plan">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Treningovy plan</div>
                    <div id="plan-content">
                        
                    </div>
                </div>
                <table id="table-plan">
                    <tr>
                        <td>cali</td>
                        <td>stre</td>
                    </tr>
                    <tr>
                        <td>mo</td>
                        <td>tue</td>
                    </tr>
                    <tr>
                        <td>xx</td>
                        <td>xx</td>
                    </tr>
                </table>
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