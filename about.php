<?php
    //aktualna stranka
    $currentPage = 'about';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../about.php";
?>

    <div id="content">
        <div id="main">
            <div id="content-title">About beHealth-beFit</div>
            <div id="main-info">
            Jednoducha webova aplikacia, ktora pomaha byt zdravy. Hlavna tema je zdravie a cvicenie.
            </div>
        </div>

        <div id="functions">
            <div id="functions-title">Funkcie</div>
            
            <ul>
                <li>
                    <div class="function">
                        <div class="function-title">prehlad cvikov</div>
                        <div class="function-info">
                        Prehlad zakladnych druhov cvikov na vsetky casti tela. Na kazdu cast su aj priklady cvikov 
                        so strucnym popisom. Cviky sú usporiadané podla kategorii. Kazdy cvik ma odporucany pocet 
                        opakovani alebo cas cviku.
                        </div>
                    </div>
                </li>

                <li>
                    <div class="function">
                        <div class="function-title">treningova sekcia</div>
                        <div class="function-info">
                        Moznost zapisat si dennu aktivitu vo viacerych kategoriach podla odcvicenych narocnosti. 
                        Nasledne sa da este vygenerovat treningovy plan. Treningovy plan sa meni podla zmien Vasich 
                        informacii.
                        </div>
                    </div>
                </li>
            </ul>
            
        </div>

        <div id="access">
            <div id="access-title">Pristup</div>
            <div id="access-info">
            Tento web je volne k dispozicii. Cast webu je dostupna pre kazdeho zadarmo. Stranka my-training je dostupna 
            len zaregistrovanym uzivatelov. Je to z jednoducheho dovodu. Potrebujem vediet od pouzivatelov dolezite 
            informacie, inak im nemozem poradit. Najma pretoze udaje ukladam do databazy ...
            </div>
        </div>
    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>