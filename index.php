<?php
    //aktualna stranka
    $currentPage = 'index';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../index.php";

    //session_destroy();
?>

    <div id="content">
        <div id="home">
            <div id="content-title">Domov</div>
            <article id="main">
                <div id="info">
                    <p>Ahoj, vitaj na stránke beHealth-beFit!</p>
                    <p>Pokojne sa prihlás a ja ti z radostou pomôžem. Môžes sa zlepšiť v posilňovaní 
                        tela a zlepšiť si pohybové rozsahy. K tomu získaš cenné rady a typy zdravého životného štýlu.</p>
                    <p>Neváhaj, čas beží a ty máš jedinečnú možnosť na zmenu.</p>
                </div>
                <img src="2-tools/B-media/strong-man.jpg" alt="hopa" id="home-sportsman">
                <div id="other">
                    <?php 
                        // ak nie som prihlaseny presmeruje naspat
                        if( $_SESSION['login'] == false ){
                           //echo "<a href='2-tools/E-login/log-in/log-in.php' class='login'>Prihlas sa prosim!</a>";
                        }
                    ?>
                </div>
            </article>
        </div>
    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>