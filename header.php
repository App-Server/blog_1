<?php
    include_once("helpers/url.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<? $BASE_URL ?> /img/logo.svg" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<? $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a>
                <li><a href="#" class="nav-link">Sobre</a>
                <li><a href="<? $BASE_URL ?>contact.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>