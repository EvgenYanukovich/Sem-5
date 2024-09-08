<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 9</title>
</head>

<body>
    <?php
    $city = ["Минск", "Брест", "Витебск", "Бобруйск"];
    $temp = [-5, -8, 10, 25];

    $cityTemp = array_combine($city, $temp);

    arsort($cityTemp);

    echo "Города и температуры:<br>";
    foreach ($cityTemp as $city => $temperature) {
        echo "$city: $temperature<br>";
    }

    $maxTempCity = array_keys($cityTemp, max($cityTemp))[0];
    echo "Город с самой высокой температурой: $maxTempCity<br>";

    $averageTemp = array_sum($temp) / count($temp);
    echo "Средняя температура: $averageTemp<br>";
    ?>
</body>

</html>