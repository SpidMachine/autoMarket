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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background: #dbdbdb">

<?= include "../src/inc/header.php" ?>

<div class="main">
    <div class="media position-relative">
        <div class="part1">
            <div class="media position-relative">
                <img src="../src/files/public.jpeg" class="mr-3" alt="..." style="width: 20%">
                <div class="media-body" style="display: flex;">
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
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>