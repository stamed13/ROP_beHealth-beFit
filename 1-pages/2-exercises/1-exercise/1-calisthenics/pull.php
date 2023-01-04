<?php
    //aktualna stranka
    $currentPage = 'pull';

    //pripojenie header casti
    include('../layout/header.php');
?>

    <div id="content">
        <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
        <section id="exercises">
            <article id="main">
                <div id="content-title" class="exercise-title">Príťah</div>
                <div id="exercises-info" class="exercise-info">
                    obsah
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <div class="ex-kinds-kinds">
                        <a href="#calisthenics" class="ex-kinds-kind">kalistenika</a>
                    </div>
                </div>
            </article>
            <article id="calisthenics" class="exercise">
                <div class="exercise-title">Kalistenika</div>
                <div class="exercise-info">
                    obsah
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <div class="ex-kinds-kinds">
                        <a href="" class="ex-kinds-kind">príťah</a>
                    </div>
                </div>
            </article>
        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../layout/footer.php');
?>


</body>

</html>