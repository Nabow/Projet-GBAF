<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
    <title>Page principale du site</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/mini-blog-php/css/style.css">
</head>
<body>
<header>
    <p class="flotte">
    <img src="img/GBAF.png" alt="logo" />
    </p>
<div>
    <a href="index.php">Accueil</a>
    <a href="espace-membre.php">Espace membre</a>
    <a href="inscription.php">Inscription</a>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
        <a href="parametre-du-compte.php">Paramètre</a>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif; ?>
</div>
</header>
</body>
</html>