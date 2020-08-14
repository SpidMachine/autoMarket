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

<?php include "../src/inc/header.php";
include "../src/model/data.php";
include "../src/model/dataImage.php";
?>

<div class="maine">

    <h1 id="nameOf">
        <a id="aImg" href="#default"><img id="zakladka" src="../src/files/zak.png" onclick='this.src="zak1.png"'></a>
        Lada (ВАЗ) 2121 Нива
    </h1>
    <span>Просмотров 10</span>
    <hr>
    <div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../src/files/down.jpg" class="d-block mw-50">
                </div>
                <div class="carousel-item">
                    <img src="../src/files/public.jpeg" class="d-block w-50">
                </div>
                <div class="carousel-item">
                    <img src="../src/files/qwe.jpg" class="d-block w-50" style="text-align: center">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="hui">
            <div id="huii">
                <table class="descriptionsCar">
                    <ul style="list-style-type: none; display: inline;">
                        <div id="price">
                            <h1 id="priceRub"><?php echo $varPrice ?>р</h1>
                        </div>
                        <hr>
                        <li>
                            <dl>
                                <dt style="display: inline;">Год выпуска</dt>
                                <dd style="display: inline;"><?php echo $varYear_of_issue ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Состояние</dt>
                                <dd style="display: inline;"><?php echo $varCondition ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Пробег</dt>
                                <dd style="display: inline;"><?php echo $varMileage ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Тип топлива</dt>
                                <dd style="display: inline;"><?php echo $varFuel_type ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Объем л.</dt>
                                <dd style="display: inline;"><?php echo $varVolume ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Цвет</dt>
                                <dd style="display: inline;"><?php echo $varColor ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Тип кузова</dt>
                                <dd style="display: inline;"><?php echo $varBody_type ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Трансмиссия</dt>
                                <dd style="display: inline;"><?php echo $varTransmission ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt style="display: inline;">Тип привода</dt>
                                <dd style="display: inline;"><?php echo $varDrive_unit ?></dd>
                            </dl>
                        </li>

                    </ul>
                </table>
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