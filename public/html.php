<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../src/styles/stylie.css">
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


</body>
</html>