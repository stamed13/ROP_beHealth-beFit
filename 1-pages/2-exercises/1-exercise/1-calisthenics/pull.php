<?php
    //aktualna stranka
    $currentPage = 'pull';
    $page_styles = '../styles/exercise.css';
    $up = '';
    $curPageLink = '../1-calisthenics/pull.php';

    //pripojenie header casti
    include('../layout/header.php');

    $_SESSION["location"] = "../../../1-pages/2-exercises/1-exercise/1-calisthenics/pull.php";

?>

    <div id="content">
        <a href="../../../../exercises.php#calisthenics" id="back">naspäť</a>
        <section id="type">
            <article id="main">
                <div id="content-title" class="exercise-title">Príťah</div>
                <div id="type-info" class="exercise-info">
                    Pri týchto cvikoch posilňujeme svaly bicepsu a chrbtu.
                </div>
                <div id="exercises">
                    <div class="ex-kinds-title">cviky:</div>
                    <div class="ex-kinds-kinds">
                        <div class="ex-kinds-kind">zhyb</div>
                    </div>
                </div>
                <div id="types-of-type">
                    <div id="types-ex-title">Zoznam cvikov na príťah</div>
                    <div id="types-ex-list">
                        <a href="#beginer" class="type-ex">level začiatočník</a>
                        <a href="#intermediate" class="type-ex">level pokročilý</a>
                        <a href="#expert" class="type-ex">level expert</a>
                    </div>
                </div>
            </article>
            <article id="beginer" class="exercise">
                <div class="exercise-title">Začiatočník</div>
                <div class="exercise-info">
                    info
                </div>
                <div class="exercises">cvik</div>
            </article>
            <article id="intermediate" class="exercise">
                <div class="exercise-title">Pokročilý</div>
                <div class="exercise-info">
                    info
                </div>
                <div class="exercises">cvik</div>
            </article>
            <article id="expert" class="exercise">
                <div class="exercise-title">Expert</div>
                <div class="exercise-info">
                    info
                </div>
                <div class="exercises">cvik</div>
            </article>
        </section>
    </div>

<?php
    //pripojenie footer casti
    include('../layout/footer.php');
?>


</body>

</html>