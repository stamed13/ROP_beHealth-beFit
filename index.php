<?php
    require_once ('2-tools/E-login/log-in/loged.php');

    //aktualna stranka
    $currentPage = 'index';

    //pripojenie header casti
    include('C-layout/header.php');

    if( 1 < 5 ) {
        
    } else {
        
    }
?>

    <div id="content">
        <div id="content-title">Home</div>
        <article id="main">
            <div id="info">Ahoj, vitaj na stranke beHealth-beFit!</div>
            <img src="2-tools/B-media/strong-man.jpg" alt="hopa" id="home-sportsman">
        </article>

    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>