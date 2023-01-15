<?php
    //aktualna stranka
    $currentPage = 'my-training';

    //pripojenie header casti
    include('C-layout/header.php');
?>

    <div id="content">
        <section id="training">
            <article id="main">
                <div id="content-title">My training</div>
                <div id="training-info">
                    Môj tréning umožňuje zápis dennej aktivity, vyhodnotenie a tréningový plán.
                </div>
            </article>
            <article id="training-menu">
            <a id="bt-training" href="1-pages/4-my-training/1-training/2-training/training.php">Môj tréning</a>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>


</body>

</html>