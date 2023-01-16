<?php
    //aktualna stranka
    $currentPage = 'activity';
    $page_styles = 'styles/activity.css';
    $up = '../';

    //pripojenie header casti
    include('../../layout/header.php');
?>

    <div id="content">
        <div id="buttons-arrow">
            <a href="../training.php" id="bt-arrow">naspäť</a>
            <a href="#new-tab" id="bt-arrow">vpred</a>
        </div>
        <section id="training">
            <article id="main">
                <div id="content-title">Moja aktivita</div>
                <div id="training-info">
                    Mozes si vybrat z nasledujucich moznosti: 
                </div>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../../layout/footer.php');
?>


</body>

</html>