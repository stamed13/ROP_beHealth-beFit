<?php
    //aktualna stranka
    $currentPage = 'about';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../about.php";
?>

    <div id="content">
        <div id="about">
        <div id="main">
            <div id="content-title">About beHealth-beFit</div>
            <div id="main-info">
                Jednoduchá webová aplikácia, ktorá pomaha byť zdravý. Hlavná téma je zdravie a cvičenie.
            </div>
        </div>

        <div id="functions">
            <div id="functions-title">Funkcie</div>
            
            <ul>
                <li>
                    <div class="function">
                        <div class="function-title">prehľad cvikov</div>
                        <div class="function-info">
                        Prehľad základných druhov cvikov na všetky časti tela. Na každu čast sú aj príklady cvikov 
                        so stručným popisom. Cviky sú usporiadané podľa kategórií. 
                        </div>
                    </div>
                </li>

                <li>
                    <div class="function">
                        <div class="function-title">tréningová sekcia</div>
                        <div class="function-info">
                        Možnosť zapísať si dennú aktivitu vo viacerých kategóriách podľa odcvičených náročností. 
                        Následne sa dá ešte vygenerovať tréningový plán. Treningový plán sa mení podľa zmien 
                        informácií od daného používateľa.
                        </div>
                    </div>
                </li>
            </ul>
            
        </div>

        <div id="access">
            <div id="access-title">Prístup</div>
            <div id="access-info">
            Tento web je voľne k dispozícií. Časť webu je dostupná pre každeho zadarmo. Stránka my-training je dostupná 
            len zaregistrovaným užívateľom. Je to z jednoduchého dôvodu. Potrebujem vedieť od použivateľov dôležité 
            informácie, inak im nemôžem poradiť. Najmä pretože potrebujem dlhodo zbierať údaje. Podľa thovo dokážem spoľahlivo vyhodnotiť a poradiť ...
            </div>
        </div>
        </div>
    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>