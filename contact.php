<?php
    //aktualna stranka
    $currentPage = 'contact';

    //pripojenie header casti
    include('C-layout/header.php');

    $_SESSION["location"] = "../../../contact.php";
?>

    <div id="content">
        <section id="contact">
            <div id="content-title">Contact</div>
            <article id="autor-info">
                <div id="title-autor">autor</div>
                <div id="contact-items">
                <div class="contact-item">
                        <div class="item-title">name:</div>
                        <div class="item-content" id="full-name">Stanislav Medvec</div>
                    </div>
                    <div class="contact-item">
                        <div class="item-title">email:</div>
                        <div class="item-content" id="email"></div>
                    </div>
                    <div class="contact-item">
                        <div class="item-title">github:</div>
                        <div class="item-content" id="github"></div>
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