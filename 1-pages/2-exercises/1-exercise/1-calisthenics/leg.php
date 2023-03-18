<?php
    //aktualna stranka
    $currentPage = 'leg';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../1-calisthenics/leg.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/1-calisthenics/leg.php";

?>

    <div id="content">
        <section id="type" class="cali">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#calisthenics" id="back">späť</a>
                    <div id="content-title" class="exercise-title">Nohy</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly nôh a to prevažne stehno a lýtko. Pri týchto cvikoch si 
                    vystačíme s podlahou.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">drep, sumo drep, drep na jednej nohe...</div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na nohy</div>
                    <div id="types-ex-list">
                        <a href="#beginer" class="type-ex beginer">level začiatočník</a>
                        <a href="#intermediate" class="type-ex intermediate">level pokročilý</a>
                        <a href="#expert" class="type-ex expert">level expert</a>
                    </div>
                </div>
            </article>

            <article id="beginer" class="exercises">
                <div class="exercise-title beginer">Začiatočník</div>
                <div class="exercise-info">
                    Level začiatočník je pre úplných začiatočníkov, ale dokáže poriadne potrápiť. 
                    Cviky sú jednoduché na učenie.
                </div>
                <div class="exercises-exercise">
                    <div class="exercise">
                        <div id="" class="name">drep s rukami vpred</div>
                        <div class="info">
                            postav sa s chodidlami na šírku ramien, ruky sú vystreté a pred telom, pokrč nohy do drepu
                            až kým nie je v kolenách aspoň 90°
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep s rukami za hlavou</div>
                        <div class="info">
                            postav sa s chodidlami na šírku ramien, ruky sú pokrčené a za hlavou, pokrč nohy do drepu
                            až kým nie je v kolenách aspoň 90°
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">sumo drep</div>
                        <div class="info">
                            postav sa s chodidlami naširoko, ruky sú pokrčené, spojené a pred telom, 
                            pokrč nohy do drepu až kým nie je v kolenách aspoň 90°
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">úzky drep</div>
                        <div class="info">
                            postav sa s chodidlami užšie ako na šírku ramien, ruky sú vystreté a pred telom, 
                            pokrč nohy do drepu až kým nie je v kolenách aspoň 90°
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">skákavé výpady</div>
                        <div class="info">
                            postav sa s chodidlami na šírku ramien, skoč, doskoč s nohami od seba (jedna vpred, druhá vzad),
                            pokrč nohy, skoč, vymeň nohy (zadná noha je vodorovne so zemou)
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep výskok</div>
                        <div class="info">
                            postav sa s chodidlami na šírku ramien, ruky sú vystreté a vedľa tela, pokrč nohy do drepu
                            nadýchni sa a skoč čo najvyšie, dopadni vystretými nohami, pád stlm špičkami chodidiel, 
                            potom na päty a pokrč nohy, ďalej urob drep aspoň do 90° v kolennom kĺbe
                        </div>
                    </div>
                </div>
            </article>

            <article id="intermediate" class="exercises">
                <div class="exercise-title intermediate">Pokročilý</div>
                <div class="exercise-info">
                    Level pokročilý je pre mierne pokročilých alebo pokročilých. Sú to už náročnejšie cviky.
                </div>
                <div class="exercises-exercise">
                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe dotyk členkov</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">bulgarian split squats</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">záklon na kolenách</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe s vystretou nohou</div>
                        <div class="info">
 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe s nohou na kolene</div>
                        <div class="info">
 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">izometria v polohe stolička</div>
                        <div class="info">

                        </div>
                    </div>

                </div>
            </article>

            <article id="expert" class="exercises">
                <div class="exercise-title expert">Expert</div>
                <div class="exercise-info">
                    Level pre skutočných makačov, pre tých ktorý sú už na vysokej úrovni a majú toho veľa natrénovaného.
                </div>
                <div class="exercises-exercise">
                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe so záťažou</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe s nohou vo flexe</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe, ruky za chrbtom</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">skok na prekážku</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe so záťažou</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">drep na 1 nohe s výskokom</div>
                        <div class="info">

                        </div>
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