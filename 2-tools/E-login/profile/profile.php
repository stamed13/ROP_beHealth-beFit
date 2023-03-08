<?php
    //aktualna stranka
    $currentPage = 'profile';
    $page_styles = 'styles/profile.css';

    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');
    require_once ('profileHelp.php');

    //pripojenie header casti
    include('layout/header.php');

    //$_SESSION["location"] = "../profile/profile.php";

    $idUser = $_SESSION['idUser'];

    //session_destroy();
?>

    <div id="content">
        <section id="profile">

            <article id="main">
                <div class="buttons-arrow">
                    <a href="" class="bt-arrow hide">naspäť</a>
                </div>
                <div id="main-content">
                    <div id="content-title">Profil</div>
                    <div id="profile-content">
                        <a href="edit-profile.php" id="edit"><img src="media/edit.svg" alt="hopa"></a>

                        <div id="info">
                            <div id="name">
                                <div id="fullname"> <?= fullname($conn, "SELECT * FROM users WHERE idUser='$idUser'") ?> </div>
                                <div id="email"> <?= email($conn, "SELECT * FROM users WHERE idUser='$idUser'"); ?> </div>
                            </div>

                            <div id="other">
                                <div id="gender">pohlavie: <?= gender($conn) ?> </div>
                                <div id="age">vek: <?= age($conn) ?> </div>
                                <div id="height">výška: <?= height($conn) ?> </div>
                                <div id="weight">váha: <?= weight($conn) ?> </div>
                            </div>
                        </div>
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