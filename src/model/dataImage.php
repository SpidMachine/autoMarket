<?php

require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query = "SELECT image_path FROM image";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $varId = $row['image_id'];
        $varPath = $row['image_path'];
    }

    // очищаем результат
    mysqli_free_result($result);
}