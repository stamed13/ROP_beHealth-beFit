<?php
    //aktualna stranka
    $currentPage = 'hand';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../2-flexibility/hand.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/2-flexibility/hand.php";

?>

    <div id="content">
        <section id="type" class="stre">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#flexibility" id="back">späť</a>
                    <div id="content-title" class="exercise-title">Ruky</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch naťahujeme svaly rúk, ramien a zápästia.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">krúženie ramenami, mostík...</div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na ruky</div>
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
                        <div id="" class="name">posuny v sede</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">krúženie ramenami</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">ťahanie sa za ramenom</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">predklony so zápästím</div>
                        <div class="info">

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
                        <div id="" class="name">zdvih do polmostíka</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">pretáčanie ramien s palicou</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">ťahanie rúk pomocou expandera</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">záklony s vytočeným zápästím</div>
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
                        <div id="" class="name">výdrž v polmostíku</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">posuny v striežke</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">spojenie rúk za chrbtom</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">záklony s pretočeným zápästím</div>
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