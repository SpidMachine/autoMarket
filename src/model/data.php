<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require_once 'connection.php'; // подключаем скрипт

    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    $query = "SELECT * FROM car";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $varId = $row['id'];
            $varYear_of_issue = $row['year_of_issue'];
            $varCondition = $row['condition'];
            $varMileage = $row['mileage'];
            $varFuel_type = $row['fuel_type'];
            $varVolume = $row['volume'];
            $varColor = $row['color'];
            $varBody_type = $row['body_type'];
            $varTransmission = $row['transmission'];
            $varDrive_unit = $row['drive_unit'];
            $varPrice = $row['price'];
            $varUser_id = $row['user_id'];
        }

        // очищаем результат
        mysqli_free_result($result);
    }

    mysqli_close($link);
    ?>
</body>

</html>