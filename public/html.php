<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../src/styles/stylie.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background: #dbdbdb">

<?php include "../src/model/header.php" ?>

<div class="maine">

    <h1 id="nameOf">
        <a id="aImg" href="#default"><img id="zakladka" src="../src/files/zak.png" onclick='this.src="zak1.png"'></a>
        Lada (ВАЗ) 2121 Нива
    </h1>
    <span>Просмотров 10</span>
    <hr>
    <div class="hui">
        <div id="huii">
            <div id="price">
                <h1 id="priceRub">8 540р</h1>
                <span id="priceDol">3500</span>
                <hr>
            </div>
            <div class="descriptionsCar">
                <strong>Год выпуска</strong>
                <strong>Состояние</strong>

            </div>
        </div>
        <div>
            <img id="img" src="../src/files/public.jpeg">
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