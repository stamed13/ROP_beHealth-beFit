<?php
    //aktualna stranka
    $currentPage = 'exercises';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../exercises.php";
?>

    <div id="content">
        <section id="exercises">
            <article id="main">
                <div id="content-title" class="exercise-title">Cviky</div>
                <div id="exercises-info" class="exercise-info">
                    Cvičenie je dôležité pre naše zdravie. Či je to už z fyzického alebo psychického hľadiska.
                    Môže predĺžiť Váš život a pomôcť predchádzať určitým chorobám, ako sú niektoré druhy 
                    rakoviny, cukrovka a vysoká krvný tlak. Cvičenie je skvelý odpočinok od každodenných starostí 
                    a pomáha nám býť šťastnejší. Môžme si zlepšiť koordináciu, pohybové rozsahy, vytrvalosť, 
                    rovnováhu alebo zvýšiť silu. Vybral som 6 bežných druhov cvičenia a dôležité informácie o tom čo robiť pred a po cvičení.
                </div>

                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <nav class="ex-kinds-kinds">
                    <a  href="#before-and-after" class="ex-kinds-kind be-af">pred a po cvičení</a>
                        <a href="#calisthenics" class="ex-kinds-kind cali">kalistenika</a>
                        <a href="#flexibility" class="ex-kinds-kind stre">flexibilita</a>
                        <a  class="ex-kinds-kind ba-st not">rovnováha alebo stabilita</a>
                        <a  class="ex-kinds-kind kardio not">kardio</a>
                        <a  class="ex-kinds-kind hiit not">HIIT</a>
                        <a  class="ex-kinds-kind weigth not">silový tréning</a>
                    </nav>
                </div>
            </article>

            <article id="before-and-after" class="exercise">
                <div class="exercise-title">Pred a po cvičení</div>
                <div class="exercise-info">
                    Pred cvičením je dôležité urobiť viacero úkonov. Potrebujeme zahriať svaly a potom sa rozcvičiť. 
                    Neskôr, najlepšie večer, možeme urobiť statický strečing. Ten slúži na uvoľnenie svalstva  a regeneráciu 
                    po tréningu.
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <nav class="ex-kinds-kinds">
                        <a class="ex-kinds-kind not">zahrievačka</a>
                        <a class="ex-kinds-kind not">rozcvička na vrchnú časť</a>
                        <a class="ex-kinds-kind not">rozcvička na spodnú časť</a>
                        <a class="ex-kinds-kind not">statický strečing</a>
                    </nav>
                </div>
                <a href="" class="view-more">pozrieť viac</a>
            </article>

            <article id="calisthenics" class="exercise">
                <div class="exercise-title">Kalistenika</div>
                <div class="exercise-info">
                    Kalistenika je cvičenie, ktorým si rozvíjame svoju silu pomocou váhy vlastného tela.
                    Toto cvičenie je komplexné, pri každom cviku zapájame viacero svalových partií naraz.
                    Je praktické, pretože sa dá vystačiť s jednoduchými pomôckami ako sú hrazda, bradlá alebo gymnastické kruhy. 
                    Môžme si zlepšiť rovnováhu, koordináciu a vytrvalosť.
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <nav class="ex-kinds-kinds">
                        <a href="1-pages/2-exercises/1-exercise/1-calisthenics/pull.php" class="ex-kinds-kind">príťah</a>
                        <a href="1-pages/2-exercises/1-exercise/1-calisthenics/push.php" class="ex-kinds-kind">tlak</a>
                        <a href="1-pages/2-exercises/1-exercise/1-calisthenics/leg.php" class="ex-kinds-kind">nohy</a>
                        <a href="1-pages/2-exercises/1-exercise/1-calisthenics/core.php" class="ex-kinds-kind">jadro</a>
                    </nav>
                </div>
                <a href="" class="view-more">pozrieť viac</a>
            </article>

            <article id="flexibility" class="exercise">
                <div class="exercise-title">Flexibilita</div>
                <div class="exercise-info">
                    Cvičenie, ktorým si uvoľňujeme svaly a zlepšujeme pohybové rozsahy je strečing. Može to byť aj yoga.
                    Zameriam sa na rozcvičku a strečing rôznych svalových partií. Cvičí sa na mäkkej podložke. Strečing si vyžaduje
                    sústredenie na svaly, ktoré naťahujeme.
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <nav class="ex-kinds-kinds">
                        <a href="1-pages/2-exercises/1-exercise/2-flexibility/back.php" class="ex-kinds-kind">chrbát</a>
                        <a href="1-pages/2-exercises/1-exercise/2-flexibility/hand.php" class="ex-kinds-kind">ruky</a>
                        <a href="1-pages/2-exercises/1-exercise/2-flexibility/neck.php" class="ex-kinds-kind">krk</a>
                        <a href="1-pages/2-exercises/1-exercise/2-flexibility/leg.php" class="ex-kinds-kind">nohy</a>
                    </nav>
                </div>
                <a href="" class="view-more">pozrieť viac</a>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>


</body>

</html>