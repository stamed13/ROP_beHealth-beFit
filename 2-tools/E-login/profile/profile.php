<?php
    //aktualna stranka
    $currentPage = 'profile';

    //pripojenie header casti
    include('layout/header.php');

    //$_SESSION["location"] = "../profile/profile.php";

    //session_destroy();
?>

    <div id="content">
        <section id="profile">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="" class="bt-arrow">naspäť</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Treningovy plan</div>
                    <div id="profile-content">
                        <a href="" id="edit"><img src="media/edit.svg" alt="hopa"></a>
                    </div>
                </div>
            </article>
            
        </section>

    </div>
    
<?php
    //pripojenie footer casti
    include('layout/footer.php');
?>

</body>

</html>