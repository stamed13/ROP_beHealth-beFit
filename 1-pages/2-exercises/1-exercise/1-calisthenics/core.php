<?php
    //aktualna stranka
    $currentPage = 'core';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../1-calisthenics/core.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/1-calisthenics/core.php";

?>

    <div id="content">
        <section id="type" class="cali">
            <article id="main">
                <div id="main-head">
                    <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
                    <div id="content-title" class="exercise-title">Jadro</div>
                </div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly jadra ako sú brušné svaly. Veľa ľudí si spája cvičenie na
                    jadro s tehličkami. "Tehličky" na bruchu ukazujú koľko percent podkožného tuku máme. 
                    Nemusíme Jadro môžme mať silné aj keď ich nemáme.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">plank, kolíska, horolezci...</div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na brucho</div>
                    <div id="types-ex-list">
                        <a href="#beginer" class="type-ex beginer">level začiatočník</a>
                        <a href="#intermediate" class="type-ex intermediate">level pokročilý</a>
                        <a href="#expert" class="type-ex expert">level expert</a>
                    </div>
                </div>
            </article>

            <article id="beginer" class="exercise">
                <div class="exercise-title beginer">Začiatočník</div>
                <div class="exercise-info">
                    Level začiatočník je pre úplných začiatočníkov, ale dokáže poriadne potrápiť. 
                    Cviky sú jednoduché na učenie.
                </div>
                <ul>
                    <li>
                        <div id="beg-shortening" class="exercises">skracovačky 5-10x</div>
                        <div class="info">
                            <p>
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj rukami kolien 
                            </p>
                            <p>
                            ( známy cvik, ale nie je to brušák, ten je málo užitočný )
                            </p>
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">dotýkanie členkov 5x P+Ľ</div>
                        <div class="info">
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je na zemi, 
                            pomaly sa dotýkaj raz ľavou a raz pravou rukou členku na rovnakej strane
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">sklápačky 5-10x </div>
                        <div class="info">
                            (jednoduchšia verzia)
                            ľahni si na chrbát, pokrč nohy (do 90° v kolennom aj v bedrovom kĺbe), plecia sú zatlačené, 
                            chrbát je na zemi, pomaly sa dotýkaj lakťami kolien 
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">quadrupedál  5-10s</div>
                        <div class="info">
                            kľakni si na kolená, ruky sú pod pleciami, plecia sú zatlačené , pokrč nohy 
                            (do 90° aj v bedrovom kĺbe), chrbát je vystretý, vydrž v tejto polohe na špičkách
                        </div>
                    </li>

                    <li>
                        <div class="exercises">oddych  60s</div>
                    </li>

                    <li>
                        <div id="" class="exercises">ruské otočky  5x P+Ľ</div>
                        <div class="info">
                            (jednoduchšia verzia)
                            ľahni si na chrbát, pokrč nohy (do 90°), plecia sú zatlačené, chrbát je vystretý, 
                            pomaly rotuj do strán, raz do prava a raz do ľava a dotkni sa prstami zeme
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">plank na kolenách  30-60s</div>
                        <div class="info">
                            ľahni si na brucho, vyflexuj špičky, plecia sú zatlačené, ruky sú pokrčené (do 90° v lakťoch), 
                            predlaktie a dlane sú na zemi, chrbát je vystretý, zdvihni sa, napni zadok, vydrž v tejto pozícii 
                            (príprava na plank)
                        </div>
                    </li>
                </ul>
            </article>

            <article id="intermediate" class="exercise">
                <div class="exercise-title intermediate">Pokročilý</div>
                <div class="exercise-info">
                    Level pokročilý je pre mierne pokročilých alebo pokročilých. Sú to už náročnejšie cviky.
                </div>
                <ul>
                    <li>
                        <div id="" class="exercises">kolíska 30s</div>
                        <div class="info">
                            <p>
                            (ťahšia verzia) ľahni si na chrbát, pokrč nohy (do 90° v kolennom aj v bedrovom kĺbe), 
                            ruky sú vystreté a sú kolmo na zem, plecia sú zatlačené, chrbát je stále na zemi, 
                            pevne drž pozíciu, pomaly sa kýv vpred a vzad
                            </p>
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">striedavé zdvihy nôh 30s</div>
                        <div class="info">
                            <p>
                            (lahšia verzia) ľahni si na chrbát, vystri nohy a ruky, ruky sú na zemi 
                            vedľa tela, plecia sú zatlačené, chrbát je stále na zemi, zdvihni nohy do 90°, 
                            spevni telo, pomaly dvíhaj raz pravú nohu a raz ľavú nohu do 90°, tak aby 
                            bola stále zdvihnutá aspoň jedna noha
                            </p>
                            <p>
                            (ťahšia verzia) ľahni si na chrbát, vystri nohy a ruky, ruky sú na zemi 
                            vedľa tela, plecia sú zatlačené, chrbát je stále na zemi, zdvihni nohy do 90°, 
                            spevni telo, pomaly dvíhaj raz pravú nohu a raz ľavú nohu do 90°, 
                            keď budeš mať zdvihnuté obe nohy dvihni sa, odlep chrbát od zeme 
                            </p>
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">horolezci  60s</div>
                        <div class="info">
                            kľakni si na kolená, vystri ruky, ruky sú kolmo na zem, chrbát je vystretý, 
                            brucho je aktivované a spevnené, plecia sú zatlačené, choď na špičky, 
                            nohy sú stále nad zemou, jedna noha je stále vystretá, pokrč raz 
                            pravú a raz ľavú nohu, pritiahni ju smerom dopredu približne pod brucho 
                            a potom zasuň naspäť
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">ruské otočky  30s</div>
                        <div class="info">
                            (ťahšia verzia)
                            ľahni si na chrbát, pokrč nohy, zdvihni sa na zadok, plecia sú zatlačené, 
                            chrbát je vystretý, spevni telo, pomaly rotuj do strán, 
                            raz do prava a raz do ľava a dotkni sa prstami zeme 
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">stierače  60s</div>
                        <div class="info">
                            (ťahšia verzia)
                            ľahni si na chrbát, ruky sú upažené, vedľa seba (do 90° v ramennom kĺbe)
                            nohy sú vystreté, chrbát je na zemi, plecia sú zatlačené, 
                            zdvihni nohy (do 90° v bedrovom kĺbe), nohy drž v tomto uhle, presúvaj 
                            nohy raz do prava a raz do ľava až sa špičky dotknú zeme 
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">oddych  60s</div>
                    </li>

                    <li>
                        <div id="" class="exercises">nožnice  60s</div>
                        <div class="info">
                            ľahni si na chrbát, opri sa o predlaktie, chrbát je vystretý, plecia sú 
                            zatlačené, nohy sú vystreté, zdvihni nohy (približne do výšky ramien), 
                            nohy drž v tejto výške, pomaly zdvihni raz pravú a raz ľavú nohu
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">izometria  30s</div>
                        <div class="info">
                            sadni si na zem, pokrč nohy, nohy sú vpredu vedľa seba, chrbát je vystretý, 
                            plecia sú zatlačené, ruky si daj dlaňami na hrudník do kríža, spusť sa tak, 
                            aby si sa udržal, aktivuj jadro, mierne zaguľať chrbát, vydrž v tejto pozícii
                        </div>
                    </li>

                </ul>
            </article>

            <article id="expert" class="exercise">
                <div class="exercise-title expert">Expert</div>
                <div class="exercise-info">
                    Level pre skutočných makačov, pre tých ktorý sú už na vysokej úrovni a majú toho veľa natrénovaného.
                </div>
                <ul>
                    <li>
                        <div id="" class="exercises">dragon flag  5-10x</div>
                        <div class="info">
                            zdvíhanie nôh na zemi, rukami sa držím napríklad rebriny
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">vznos do 180° 5-10x</div>
                        <div class="info">
                            zdvíhanie nôh na hrazde
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">stierače 5-10x</div>
                        <div class="info">
                            (ťažká verzia) tak, ako ľahšia verzia, ale ruky sú pokčené v lakťoch
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">kolíska 60s</div>
                        <div class="info">
                            <p>
                            (ťažká verzia) ľahni si na chrbát, vystri nohy a ruky, buď približne v rovine
                            plecia sú zatlačené, chrbát je stále na zemi, pevne drž pozíciu, 
                            pomaly sa kýv vpred a vzad
                            </p>
                        </div>
                    </li>

                    <li>
                        <div id="" class="exercises">tlak panvy nad seba 5-10x</div>
                        <div class="info">
                            <p>
                            podobne ako výtlak do stojky, vytlačenie sa cez panvu nahor, ruky sú na zemi
                            </p>
                        </div>
                    </li>
    
                </ul>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../layout/footer.php');
?>


</body>

</html>