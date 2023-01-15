<?php
    //aktualna stranka
    $currentPage = 'training';
    $page_styles = '../2-training/styles/training.css';

    //pripojenie header casti
    include('../layout/header.php');
?>

    <div id="content">
        <a href="../../../../my-training.php" id="back">naspäť</a>
        <section id="training">
            <article id="main">
                <div id="content-title">My training</div>
                <div id="training-info">
                    Mozes si vybrat z nasledujucich moznosti: 
                </div>
            </article>

            <article id="training-menu">
                <a id="bt-training" href="">Denna aktivita</a>
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