<?php
    //aktualna stranka
    $currentPage = 'exercises';

    //pripojenie header casti
    include('C-layout/header.php');
?>

    <div id="content">
        <section id="exercises">
            <article id="main">
                <div id="content-title" class="exercise-title">Exercises</div>
                <div id="exercises-info" class="exercise-info">
                    Kratke informacie o cviceniach...
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <div class="ex-kinds-kinds">
                        <a href="#calisthenics" class="ex-kinds-kind">kalistenika</a>
                        <a href="#flexibility" class="ex-kinds-kind">flexibilita</a>
                        <a href="" class="ex-kinds-kind">rovnováha alebo stabilita</a>
                        <a href="" class="ex-kinds-kind">kardio</a>
                        <a href="" class="ex-kinds-kind">HIIT</a>
                        <a href="" class="ex-kinds-kind">silový tréning</a>
                    </div>
                </div>
            </article>
            <article id="calisthenics" class="exercise">
                <div class="exercise-title">Calisthenics</div>
                <div class="exercise-info">About calisthenics</div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <div class="ex-kinds-kinds">
                        <a href="" class="ex-kinds-kind">príťah</a>
                        <a href="" class="ex-kinds-kind">tlak</a>
                        <a href="" class="ex-kinds-kind">nohy</a>
                        <a href="" class="ex-kinds-kind">jadro</a>
                    </div>
                </div>
            </article>
            <article id="flexibility" class="exercise">
                <div class="exercise-title">Flexibility</div>
                <div class="exercise-info">About flexibility</div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <div class="ex-kinds-kinds">
                        <a href="" class="ex-kinds-kind">celý chrbát</a>
                        <a href="" class="ex-kinds-kind">ramená</a>
                        <a href="" class="ex-kinds-kind">ruky</a>
                        <a href="" class="ex-kinds-kind">zápästie</a>
                        <a href="" class="ex-kinds-kind">krk</a>
                        <a href="" class="ex-kinds-kind">brucho</a>
                        <a href="" class="ex-kinds-kind">hamstring</a>
                        <a href="" class="ex-kinds-kind">lýtko</a>
                        <a href="" class="ex-kinds-kind">chodidlo</a>
                    </div>
                </div>
            </article>
        </section>
    </div>

<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>


</body>

</html>