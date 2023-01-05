<?php
    //aktualna stranka
    $currentPage = 'leg';

    //pripojenie header casti
    include('../layout/header.php');
?>

    <div id="content">
        <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
        <section id="type">
            <article id="main">
                <div id="content-title" class="exercise-title">Nohy</div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly ako sú stehná, lýtka a iné.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">
                        <div class="ex-kinds-kind">drep</div>
                    </div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na nohy</div>
                    <div id="types-ex-list">
                        <a href="#beginer" class="type-ex">level začiatočník</a>
                        <a href="#intermediate" class="type-ex">level pokročilý</a>
                        <a href="#expert" class="type-ex">level expert</a>
                    </div>
                </div>
            </article>
            <article id="beginer" class="exercise">
                <div class="exercise-title">Začiatočník</div>
                <div class="exercise-info">
                info
                </div>
                <div class="exercises">cvik</div>
            </article>
            <article id="intermediate" class="exercise">
                <div class="exercise-title">Pokročilý</div>
                <div class="exercise-info">
                info
                </div>
                <div class="exercises">cvik</div>
            </article>
            <article id="expert" class="exercise">
                <div class="exercise-title">Expert</div>
                <div class="exercise-info">
                info
                </div>
                <div class="exercises">cvik</div>
            </article>
        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../layout/footer.php');
?>


</body>

</html>