<?php
    //aktualna stranka
    $currentPage = 'contact';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../contact.php";
?>

    <div id="content">
        <section id="contact">
            <div id="content-title">Kontakt</div>
            <article id="autor-info">
                <div id="title-autor">autor</div>
                <div id="contact-items">
                    <div class="contact-item">
                        <div class="item-title">meno:</div>
                        <div class="item-content" id="full-name">Stanislav Medvec</div>
                    </div>
                    <div class="contact-item">
                        <div class="item-title">email:</div>
                        <div class="item-content" id="email"></div>
                    </div>
                    <div class="contact-item">
                        <div class="item-title">github:</div>
                        <a href="https://github.com/stamed13" class="item-content" id="github-profile">profil</a>
                        <a href="https://github.com/stamed13/ROP_beHealth-beFit" class="item-content" id="github-project">projekt</a>
                        <a class="item-content" id="vzor linku"></a>
                    </div>
                </div>
            </article>
        </section>
    </div>
    
<?php
    //pripojenie footer casti
    include('C-layout/footer.php');
?>

</body>

</html>