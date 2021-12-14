<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap"
          rel="stylesheet">
    <link href="css/Hamburger.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<header>
    <div class="menuTitle">
        <h2 class="headerName">Emil Sjåfjell</h2>
        <div class="innerMenu">
            <ul class="ulMenu">
                <li><a href="about.php">About</a></li>
                <li><a href="main.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cv.php">CV</a></li>
            </ul>
        </div>
    </div>

    <div class="socialBar">
        <ul class="ulSocial">
            <li class="liSocial"><a href="https://twitter.com/TheDragon4u"
                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="liSocial"><a href="https://www.linkedin.com/in/emilsja/"
                                    target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>

    <div class="Hamburger">
        <input type="checkbox" id="menyAvPaa">
        <label id="burger" for="menyAvPaa">
            <div></div>
            <div></div>
            <div></div>
        </label>
        <nav id="meny">
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="main.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cv.php">CV</a></li>
            </ul>
        </nav>
    </div>

    <script>
        <script src="index.js" ></script>
    </script>
</header>