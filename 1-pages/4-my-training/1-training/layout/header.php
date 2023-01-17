<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo $up ?>../../../../2-tools/B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo $up ?>../../../../2-tools/A-styles/global.css">
    <link rel="stylesheet" href="<?php echo $up ?>../styles/header.css">
    <link rel="stylesheet" href="<?php echo $up ?>../styles/header-mobile.css">
    <link rel="stylesheet" href="<?php echo $up ?>../../../../2-tools/A-styles/content.css">
    <link rel="stylesheet" href="<?php echo $up ?>../../../../2-tools/A-styles/footer.css">
    <link rel="stylesheet" href="<?php echo $page_styles ?>">
    

    <title><?php echo $currentPage ?></title>
</head>

<body>
    <header id="header">
        <div id="header-computer">
            <div class="header-top">
                <button type="button" class="bt-log-in"><a href="2-tools/E-login/log-in/log-in.php">Log in</a></button>
                <div class="header-title">beHealth-beFit</div>
                <a href="<?php echo $curPageLink ?>"><img src="<?php echo $up ?>../../../../2-tools/B-media/logo-real.svg" alt="hopa" class="logo"></a>
            </div>
            <div class="header-menu">
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

        <div id="header-mobile">
            <div class="header-top">
                <div id="row">
                    <button type="button" class="bt-log-in"><a href="2-tools/E-login/log-in/log-in.php">Log in</a></button>
                    <a href="<?php echo $curPageLink ?>"><img src="<?php echo $up ?>../../../../2-tools/B-media/logo-real.svg" alt="hopa" class="logo"></a>
                </div>
                <div class="header-title">beHealth-beFit</div>
            </div>
            <div id="header-nav">
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

    </header>