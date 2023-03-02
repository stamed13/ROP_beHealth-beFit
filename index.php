<?php
    //aktualna stranka
    $currentPage = 'index';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../index.php";

    //session_destroy();
?>

    <div id="content">
        <div id="content-title">Home</div>
        <article id="main">
            <div id="info">
                <p>Ahoj, vitaj na stranke beHealth-beFit!</p>
                <p> Pokojne sa prihlas a ja ti z radostou pomozem. Mozes sa zlepsit v posilnovani tela a zlepsit si pohybove rozsahy. K tomu ziskas cenne rady a typy zdraveho zivotneho stylu.</p>
                <p>Nevahaj, cas bezi a ty mas jedinecnu moznost na zmenu.</p>
            </div>
            <img src="2-tools/B-media/strong-man.jpg" alt="hopa" id="home-sportsman">
        </article>

    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>