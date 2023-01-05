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
                    Cvičenie je dôležité pre naše zdravie. Či je to už z fyzického alebo psychického hľadiska.
                    Môže predĺžiť Váš život a pomôcť predchádzať určitým chorobám, ako sú niektoré druhy 
                    rakoviny, cukrovka a vysoká krvný tlak. Cvičenie je skvelý odpočinok od každodenných starostí 
                    a pomáha nám býť šťastnejší. Môžme si zlepšiť koordináciu, pohybové rozsahy, vytrvalosť, 
                    rovnováhu alebo zvýšiť silu. Vybral som 6 bežných druhov cvičenia.
                </div>
                <div class="exercise-kinds">
                    <div class="ex-kinds-title">druhy:</div>
                    <nav class="ex-kinds-kinds">
                        <a href="#calisthenics" class="ex-kinds-kind">kalistenika</a>
                        <a href="#flexibility" class="ex-kinds-kind">flexibilita</a>
                        <a  class="ex-kinds-kind">rovnováha alebo stabilita</a>
                        <a  class="ex-kinds-kind">kardio</a>
                        <a  class="ex-kinds-kind">HIIT</a>
                        <a  class="ex-kinds-kind">silový tréning</a>
                    </nav>
                </div>
            </article>
            <article id="calisthenics" class="exercise">
                <div class="exercise-title">Kalistenika</div>
                <div class="exercise-info">
                    Kalistenika je cvičenie, ktrorým si rozvíjame svoju silu pomocou váhy vlastného tela.
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
                        <a href="" class="ex-kinds-kind">rozcvička</a>
                        <a href="" class="ex-kinds-kind">celý chrbát</a>
                        <a href="" class="ex-kinds-kind">ramená</a>
                        <a href="" class="ex-kinds-kind">ruky</a>
                        <a href="" class="ex-kinds-kind">zápästie</a>
                        <a href="" class="ex-kinds-kind">krk</a>
                        <a href="" class="ex-kinds-kind">brucho</a>
                        <a href="" class="ex-kinds-kind">hamstring</a>
                        <a href="" class="ex-kinds-kind">lýtko</a>
                        <a href="" class="ex-kinds-kind">chodidlo</a>
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