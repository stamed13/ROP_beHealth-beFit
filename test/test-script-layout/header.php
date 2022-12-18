<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/global.css">

    <title>Home</title>
</head>

<body>
    <header id="header">
        <div id="header-computer">
            <div class="header-top">
                <button type="button" class="bt-log-in"><a href="log-in/log-in.php">Log in</a></button>
                <div class="header-title">beHealth-beFit</div>
                <a href="index.html"><img src="../../2-tools/B-media/logo/logo.svg" alt="hopa" class="logo"></a>
            </div>
            <div class="header-menu">
                <nav id="computer-nav">
                    <a href="index.html" class="actual">home</a>
                    <a href="2-exercises/exercises.html">exercises</a>
                    <a href="3-blog/blog.html">blog</a>
                    <a href="4-training/my-training.html">my-training</a>
                    <a href="index.html">about</a>
                    <a href="index.html">contact</a>
                </nav>
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>

        <div id="header-mobile">
            <div class="header-top">
                <div id="row">
                    <button type="button" class="bt-log-in"><a href="log-in/log-in.php">Log in</a></button>
                    <a href="index.html"><img src="media/logo-real.svg" alt="hopa" class="logo"></a>
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
                        <a href="index.html" class="actual" class="nav-link">home</a>
                        <a href="2-exercises/exercises.html" class="nav-link">exercises</a>
                        <a href="3-blog/blog.html" class="nav-link">blog</a>
                        <a href="4-training/my-training.html" class="nav-link">my-training</a>
                        <a href="index.html" class="nav-link">about</a>
                        <a href="index.html" class="nav-link">contact</a>
                    </nav>
                </div>
            </div>
        </div>

    </header>