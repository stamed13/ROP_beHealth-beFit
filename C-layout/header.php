<?php
    session_start();

    require_once ('header-login.php');
    //require_once ('2-tools/E-login/log-in/log-in.php');

    //echo $_SESSION["login"];

    if(!isset($_SESSION["login"])){
        $_SESSION["login"] = false;
    }

    //$_SESSION['login'] = false;

    //loginSession($errors);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="2-tools/B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="2-tools/A-styles/global.css">
    <link rel="stylesheet" href="2-tools/A-styles/header.css">
    <link rel="stylesheet" href="2-tools/A-styles/header-mobile.css">
    <link rel="stylesheet" href="2-tools/A-styles/content.css">
    <link rel="stylesheet" href="2-tools/A-styles/footer.css">
    <?php if($currentPage == 'index') {echo '<link rel="stylesheet" href="1-pages/1-home/styles/home.css">';} ?>
    <?php if($currentPage == 'exercises') {echo '<link rel="stylesheet" href="1-pages/2-exercises/styles/exercises.css">';} ?>
    <?php if($currentPage == 'blog') {echo '<link rel="stylesheet" href="1-pages/3-blog/styles/blog.css">';} ?>
    <?php if($currentPage == 'my-training') {echo '<link rel="stylesheet" href="1-pages/4-my-training/styles/my-training.css">';} ?>
    <?php if($currentPage == 'about') {echo '<link rel="stylesheet" href="1-pages/5-about/styles/about.css">';} ?>
    <?php if($currentPage == 'contact') {echo '<link rel="stylesheet" href="1-pages/6-contact/styles/contact.css">';} ?>
    

    <title><?php echo $currentPage ?></title>
</head>

<body>
    <header id="header">
        <div id="header-computer">
            <div class="header-top">
                <?php login(); ?>
                
                <div class="header-title">beHealth-beFit</div>
                <a href="index.php"><img src="2-tools/B-media/logo-real.svg" alt="hopa" class="logo"></a>
            </div>
            <div class="header-menu">
                <nav id="computer-nav">                   
                    <a href="index.php" class="<?php if($currentPage == 'index') {echo 'actual';} ?>">home</a>
                    <a href="exercises.php" class="<?php if($currentPage == 'exercises') {echo 'actual';} ?>">exercises</a>
                    <a class="hide" href="blog.php" class="<?php if($currentPage == 'blog') {echo 'actual';} ?>">blog</a>
                    <a href="my-training.php" class="<?php if($currentPage == 'my-training') {echo 'actual';} ?>">my-training</a>
                    <a href="about.php" class="<?php if($currentPage == 'about') {echo 'actual';} ?>">about</a>
                    <a href="contact.php" class="<?php if($currentPage == 'contact') {echo 'actual';} ?>">contact</a>
                </nav>
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

        <div id="header-mobile">
            <div class="header-top">
                <div id="row">
                    <button type="button" class="bt-log-in"><a href="2-tools/E-login/log-in/log-in.php">Log in</a></button>
                    <a href="index.php"><img src="2-tools/B-media/logo-real.svg" alt="hopa" class="logo"></a>
                </div>
                <div class="header-title">beHealth-beFit</div>
            </div>
            <div class="header-menu">
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <div id="header-nav">
                <div>
                    <input type="search" placeholder="Search" class="search">
                    <nav class="nav-menu">
                    <a href="index.php" class="<?php if($currentPage == 'index') {echo 'actual';} ?>">home</a>
                    <a href="exercises.php" class="<?php if($currentPage == 'exercises') {echo 'actual';} ?>">exercises</a>
                    <a class="hide" href="blog.php" class="<?php if($currentPage == 'blog') {echo 'actual';} ?>">blog</a>
                    <a href="my-training.php" class="<?php if($currentPage == 'my-training') {echo 'actual';} ?>">my-training</a>
                    <a href="about.php" class="<?php if($currentPage == 'about') {echo 'actual';} ?>">about</a>
                    <a href="contact.php" class="<?php if($currentPage == 'contact') {echo 'actual';} ?>">contact</a>
                    </nav>
                </div>
            </div>
        </div>

    </header>