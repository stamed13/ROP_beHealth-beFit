<?php
    //session_start();

    //require_once ('header-login.php');
    //require_once ('2-tools/E-login/log-in/log-in.php');

    //echo $_SESSION["login"];

    if(!isset($_SESSION["logedAdmin"])){
        $_SESSION["logedAdmin"] = false;
    }


?>


    <header id="header">
        <div class="header-top">
            <div class="header-title">beHealth-beFit</div>
        </div>
    </header>