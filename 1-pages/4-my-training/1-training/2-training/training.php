<?php
    //aktualna stranka
    $currentPage = 'training';
    $page_styles = '../2-training/styles/training.css';
    $up = '';

    //pripojenie header casti
    include('../layout/header.php');
?>

    <div id="content">
    <div id="buttons-arrow">
            <a href="../../../../my-training.php" id="bt-arrow">naspäť</a>
        </div>
        <section id="training">
            <article id="main">
                <div id="content-title">My training</div>
                <div id="training-info">
                    Mozes si vybrat z nasledujucich moznosti: 
                </div>
            </article>

            <article id="training-menu">
                <a id="bt-training" href="1-activity/activity.php">Denna aktivita</a>
                <a id="bt-training" href="">Rady a typy</a>
                <a id="bt-training" href="">Trenigovy plan</a>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../layout/footer.php');
?>


</body>

</html>