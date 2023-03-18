<?php
    //aktualna stranka
    $currentPage = 'pull';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../1-calisthenics/pull.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/1-calisthenics/pull.php";

?>

    <div id="content">
        <section id="type" class="cali">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#calisthenics" id="back">späť</a>
                    <div id="content-title" class="exercise-title">Príťah</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly chrbta, bicepsu a ramien. Pri týchto cvikoch potrebujeme 
                    pomôcky ako hrazda, gymnastické kruhy alebo niečo podobné.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">zhyb nadhmat/podhmat, austrálsky zhyb...</div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na príťah</div>
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
                        <div id="" class="name">aktívny vis</div>
                        <div class="info">
                            zaves sa na hrazdu, ruky máš vystreté, ramená sú zatlačené, 
                            pevné jadro, zatiahnutý zadok, nohy sú vystreté 
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">vytlacanie z ramien</div>
                        <div class="info">
                            zaves sa na hrazdu, ruky máš vystreté, pevné jadro, zatiahnutý zadok, 
                            nohy sú vystreté, pomaly sa vytláčaj ramená a potom spúšťaj
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">negatívny zhyb nadhmat</div>
                        <div class="info">
                            pod hrazdu si daj stoličku, vystúp na ňu a vyskoč na hrazdu do pozície zhybu,
                            uchop hrazdu nadhmatom na šírku ramien, spevni jadro, zatlač ramená,
                            snaž sa pomaly klesať do vystretých rúk
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">izometria podhmat</div>
                        <div class="info">
                            pod hrazdu si daj stoličku, vystúp na ňu a vyskoč na hrazdu do pozície zhybu,
                            uchop hrazdu podhmatom na šírku ramien, spevni jadro, zatlač ramená,
                            snaž sa udržať čo najdlhšie
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">izometria nadhmat</div>
                        <div class="info">
                            pod hrazdu si daj stoličku, vystúp na ňu a vyskoč na hrazdu do pozície zhybu,
                            uchop hrazdu nadhmatom na šírku ramien, spevni jadro, zatlač ramená,
                            snaž sa udržať čo najdlhšie
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">austrálsky zhyb</div>
                        <div class="info">
                            poď na nižšiu hrazdu, približne vo výške hrude, chyť sa hrazdy nadhmatom
                            na šírku ramien, spevni jadro, zatlač ramená, priťahuj sa  kým nebudeš mať 
                            hrudník pri hrazde
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
                        <div id="" class="name">zhyb podhmat</div>
                        <div class="info">
                            vyskoč na hrazdu, uchop hrazdu podhmatom na šírku ramien, spevni jadro, 
                            zatlač ramená, priťahuj sa  kým nebudeš mať hrudník pri hrazde
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">zhyb nadhmat</div>
                        <div class="info">
                            vyskoč na hrazdu, uchop hrazdu nadhmatom na šírku ramien, spevni jadro, 
                            zatlač ramená, priťahuj sa  kým nebudeš mať hrudník pri hrazde
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">austrálsky zhyb ťahší</div>
                        <div class="info">
                            poď na vysoké bradlá, približne vo výške trupu, chyť sa bradiel nadhmatom
                            na šírku ramien, spevni jadro, zatlač ramená, pokrč nohy, 
                            priťahuj sa  kým nebudeš mať hrudník pri bradlách
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">tuck front lever výdrž</div>
                        <div class="info">
                            vyskoč na hrazdu, uchop hrazdu nadhmatom na šírku ramien, spevni jadro, 
                            zatlač ramená, pritiahni sa, pokrč nohy a vytoč telo, aby bol chrbát 
                            vodorovne zo zemou
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">lopatkový zhyb, záklon</div>
                        <div class="info">
                            zaves sa na hrazdu, vystri ruky, zatlač ramená, nohy sú voľné, jadro nie je spevnené,
                            ťahaj sa hruďou nahor k hrazde
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">motýlik</div>
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
                        <div id="" class="name">zhyb na 1 ruke</div>
                        <div class="info">
                            zhyb s nadhmatom/podhmatom
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">L-zhyb</div>
                        <div class="info">
                            zhyb s nadhmatom/podhmatom, nohy sú vystreté, 90° v bedrách, vytvoríme tvar L
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">frontlever</div>
                        <div class="info">
                            (ťažká verzia) prvok, vodorovná doska, chrbát smerom k zemi
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">backlever</div>
                        <div class="info">
                            (ťažká verzia) prvok, vodorovná doska, chrbát smerom nahor
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">lukostrelecký zhyb</div>
                        <div class="info">
                            zhyb s nadhmatom, pritiahnem sa jednou rukou, potom sa presuniem k druhej ruke,
                            spustím sa a naopak
                        </div>
                    </div>

                    <div class="exercise">
                        <div id="" class="name">false grip zhyb</div>
                        <div class="info">
                            zhyb s nadhmatom, úchop je vyššie ako zvyčajne, zápästie je vytočené
                            palec je na hornej časti tyče, prsty sú pod hrazdou, celá váha je na zápästí
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