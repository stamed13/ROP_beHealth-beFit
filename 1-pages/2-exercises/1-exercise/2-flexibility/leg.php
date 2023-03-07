<?php
    //aktualna stranka
    $currentPage = 'leg';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../2-flexibility/leg.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/2-flexibility/leg.php";

?>

    <div id="content">
        <section id="type" class="stre">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#flexibility" id="back">naspäť</a>
                    <div id="content-title" class="exercise-title">Nohy</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch naťahujeme svaly nôh a to stehno, lýtko, zadok a priťahovače. 
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">predklon, striežka, pike pulses...</div>
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
                        <div id="" class="name">predklon v sede</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">kozácke drepy</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">pozícia dieťa</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">širšia striežka</div>
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
                        <div id="" class="name">širšia striežka</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">motýlik</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">pike pulses s 1 nohou</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">pozícia holub</div>
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
                        <div id="" class="name">užšia striežka</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">výdrž v rozštepe</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">pike pulses</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">zakláňanie sa v striežke</div>
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