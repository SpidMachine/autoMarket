<?php
include '../vendor/autoload.php'
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/styles/style.css">
    <title>Document</title>
</head>

<body style="background: #dbdbdb">

<?= include "../src/model/header.php" ?>

<div class="main">
    <div class="part1">
        <div>
            <img class="images" src="../src/files/public.jpeg">
        </div>
        <div class="descriptionF">
            <span>2009</span><br>
            <strong>8 540</strong>р<br>
            <p id="opcty">3500</p>
            <p id="opcty">Рогачев</p>
        </div>
        <div class="descriptionS">
            <a href="html.php" id="name">Lada (ВАЗ) 2121 Нива</a><br>
            <p>механика, 1.7 л., бензин, внедорожник 3 дв., 130000 км</p>
            <p id="opcty">Все вопросы по телефону!!! Без торга</p>
        </div>
    </div>
</div>

</body>

</html>