<?php
    //aktualna stranka
    $currentPage = 'core';

    //pripojenie header casti
    include('../layout/header.php');
?>

    <div id="content">
        <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
        <section id="type">
            <article id="main">
                <div id="content-title" class="exercise-title">Jadro</div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly jadra ako sú brušné svaly. Veľa ľudí si spája cvičenie na
                    jadro s tehličkami. "Tehličky" na bruchu ukazujú koľko percent podkožného tuku máme. 
                    Nemusíme Jadro môžme mať silné aj keď ich nemáme.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">
                        <div class="ex-kinds-kind">plank, kolíska, horolezci...</div>
                    </div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na brucho</div>
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
                    Level začiatočník je pre úplných začiatočníkov, ale dokáže poriadne potrápiť. 
                    Cviky sú jednoduché na učenie.
                </div>
                <ul>
                    <li>
                        <div id="beg-shortening" class="exercises">skracovačky 5-10x</div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj rukami kolien ( známy cvik, ale nie je to brušák, ten je málo užitočný )
                        </div>
                    </li>

                    <li>
                        <div class="exercises">dotýkanie členkov 5x P+Ľ</div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj raz ľavou a raz pravou rukou členku na rovnakej strane
                        </div>
                    </li>

                    <li>
                        <div class="exercises">sklápačky 5-10x </div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90° v kolennom aj v bedrovom kĺbe), plecia sú zatlačené, 
                            chrbát je na zemi, pomaly sa dotýkaj lakťami kolien (jednoduchšia verzia)
                        </div>
                    </li>

                    <li>
                        <div class="exercises">quadrupedál  5-10s</div>
                        <div class="info">
                            kľakni si na kolená, ruky sú pod pleciami, plecia sú zatlačené , pokrč nohy 
                            (do 90° aj v bedrovom kĺbe), chrbát je vystretý, vydrž v tejto polohe na špičkách
                        </div>
                    </li>

                    <li>
                    <div class="exercises">oddych  60s</div>
                    </li>

                    <li>
                        <div class="exercises">ruské otočky  5x P+Ľ</div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je vystretý, 
                            pomaly rotuj do strán, raz do prava a raz do ľava a dotkni sa prstami zeme
                            (jednoduchšia verzia)
                        </div>
                    </li>

                    <li>
                        <div class="exercises">plank na kolenách  30-60s</div>
                        <div class="info">
                            ľahni si na brucho, vyflexuj špičky, plecia sú zatlačené, ruky sú pokrčené (do 90° v lakťoch), 
                            predlaktie a dlane sú na zemi, chrbát je vystretý, zdvihni sa, napni zadok, vydrž v tejto pozícii 
                            (príprava na plank)
                        </div>
                    </li>
                </ul>
            </article>

            <article id="intermediate" class="exercise">
                <div class="exercise-title">Pokročilý</div>
                <div class="exercise-info">
                    Level pokročilý je pre mierne pokročilých alebo pokročilých. Sú to už ťahšie cviky.
                </div>
                <ul>
                    <li>
                        <div id="beg-shortening" class="exercises">gd</div>
                        <div class="info">
                            hfh
                        </div>
                    </li>

                </ul>
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