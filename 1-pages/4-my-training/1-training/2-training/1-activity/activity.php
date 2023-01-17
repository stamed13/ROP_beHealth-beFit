<?php
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';
    $curPageLink = '../1-activity/activity.php#main';

    //pripojenie header casti
    include('../../layout/header.php');

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "rop_behealth_befit";

    //vytvorenie pripojenia

    $con = mysqli_connect($serverName, $userName, $password, $dbName);

    if (mysqli_connect_error()) {
        echo "Failed to connect!";
        exit();
    }

    echo "Connect success!";

?>

    <div id="content">
        <section id="activity">
            <article id="main">
                <div class="buttons-arrow">
                    <a href="../training.php" class="bt-arrow">naspäť</a>
                    <a href="#cali" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vpravo.svg" alt="hopa"></a>
                </div>
                <div id="main-content">
                    <div id="content-title">Moja aktivita</div>
                    <div id="activity-info">
                        Nech sa paci,  tu mozes postupne vyplnit tvoju dennu aktivitu. 
                        Pokojne si aktualizuj v priebehu dna.
                    </div>
                </div>
            </article>

            <article class="form" id="cali">
                <div class="buttons-arrow">
                    <a href="#main" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vlavo.svg" alt="hopa"></a>
                    <a href="#stretch" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vpravo.svg" alt="hopa"></a>
                </div>
                <div class="form-content">
                    <div class="form-title">Posilovanie</div>
                    <form action="">
                        <select name="size">
                            <option value="0">Vyber cvik na posilovanie brucha</option>
                            <?php foreach($exercises as $exercise): ?>
                                <option value="<?= $exercise["id"] ?>"
                                    <?php if($_POST["exercise"] == $exercise["id"]): ?>
                                        selected
                                    <?php endif ?>
                                >
                                    <?= $size["name"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </form>
                </div>
            </article>

            <article class="form" id="stretch">
                <div class="buttons-arrow">
                    <a href="#cali" class="bt-arrow"><img src="../../../../../2-tools/B-media/sipka-vlavo.svg" alt="hopa"></a>
                    <a href="../training.php" class="bt-arrow">ukoncit</a>
                </div>
                <div class="form-content">
                    strecing
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