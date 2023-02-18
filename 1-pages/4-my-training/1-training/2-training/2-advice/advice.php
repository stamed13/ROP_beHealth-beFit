<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING
    
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

    require_once ('../../../../../2-tools/E-login/helper/config.php');
    require_once ('../../../../../2-tools/E-login/helper/Helper.php');

    $caliPulls =  mySQLall($conn, "SELECT * FROM exercises WHERE partId='1'");
    $advice = mySQLall($conn, "SELECT * FROM advice");


?>


    <div id="content">
        <section id="advice">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Rady a typy</div>
                    <div id="hello-user">
                        Dobry den <?php if(isset($_SESSION['fullname'])){echo $_SESSION['fullname'];} ?>!
                    </div>
                </div>
                <div id="advice-list">
                    Rady, jeden...
                    <div> <?php echo $advice["name"]; ?> </div>
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