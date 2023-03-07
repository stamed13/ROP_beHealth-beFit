<?php
    //aktualna stranka
    $currentPage = 'push';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../1-calisthenics/push.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/1-calisthenics/push.php";

?>

    <div id="content">
        <section id="type" class="cali">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
                    <div id="content-title" class="exercise-title">Tlak</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly hrudníka, tricepsu a ramien. Pri týchto cvikoch si vystačíme 
                    aj s podlahou, prípadne budeme potrebovať bradlá.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">kľuk na kolenách, diamantový kľuk...</div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na tlak</div>
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
                        <div id="" class="name">lopatkový kľuk</div>
                        <div class="info">
                            pozícia kľuku, ruky sú pod hruďou, sú vystreté, jadro a nohy sú spevnené,
                            pomaly sa vytláčam z ramien smerom nahor
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">kľuk na kolenách</div>
                        <div class="info">
                            ruky sú pod hruďou, sú vystreté, jadro je spevnené, nohy sú pokrčené,
                            pomaly sa vytláčam z ramien smerom nahor a súbežne vytláčam, vystieram ruky
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">kľuk na prekážke</div>
                        <div class="info">
                            ruky sú pod hruďou, sú vystreté, jadro a nohy sú spevnené, ruky sú na vyvýšenine
                            pomaly sa vytláčam z ramien smerom nahor a súbežne vytláčam, vystieram ruky
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">negatívny kľuk</div>
                        <div class="info">
                            ruky sú pod hruďou, sú vystreté, jadro a nohy sú spevnené,
                            pomaly sa spúšťam z vystretých rúk a vytlačených ramien
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">izometria v normálnom kľuku</div>
                        <div class="info">
                            ruky sú pod hruďou, sú vystreté, jadro a nohy sú spevnené,
                            snažím sa vydržať čo najdlhšie
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">dipy na stoličke</div>
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
                        <div id="" class="name">normálny kľuk</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">širší kľuk</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">kľuk z vyvýšeniny</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">diamantový kľuk</div>
                        <div class="info">
 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">izometria v širšom kľuku</div>
                        <div class="info">
 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">dipy</div>
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
                        <div id="" class="name">kľuk s tliesknutím</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">lukostrelecký kľuk</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">tuckpanche kľuk</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">tigrie kľuky</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">dipy na kruhoch</div>
                        <div class="info">

                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">kľuk v stojke</div>
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