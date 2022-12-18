<?php
    //aktualna stranka
    $currentPage = 'my-training';

    //pripojenie header casti
    include('C-layout/header.php');
?>

    <div id="content">
        <section id="training">
            <article id="main">
                <div id="content-title">My training</div>
                <div id="training-info">
                    Najprv zadaj informacie o tvojom zivotnom style. Podla tychto informacii dostanes lepsie typy k treningu, treningovemu planu. Potom mozes pokojne vybrat si trening
                </div>
            </article>
            <article id="training-menu">
                <button type="button" id="bt-body"><a href="1-body/my-body.html">Moje telo</a></button>
                <button type="button" id="bt-training">Moj trening</button>
            </article>

        </section>
    </div>

<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>


</body>

</html>