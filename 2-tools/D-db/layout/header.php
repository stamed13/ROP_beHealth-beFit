<?php
    //session_start();

    //require_once ('header-login.php');
    //require_once ('2-tools/E-login/log-in/log-in.php');

    //echo $_SESSION["login"];

    if(!isset($_SESSION["login"])){
        $_SESSION["login"] = false;
    }

    //$_SESSION['login'] = false;

    //loginSession($errors);
?>


    <header id="header">
        <div id="header-computer">
            <div class="header-top">
                <div class="header-title">beHealth-beFit</div>
            </div>
            <div class="header-menu">
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

        <div id="header-mobile">
            <div class="header-top">
                <div class="header-title">beHealth-beFit</div>
            </div>
            <div id="header-nav">
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

    </header>