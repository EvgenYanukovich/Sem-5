<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6</title>
</head>

<body>
    <?php
    $numbers = [];
    do {
        $number = rand(-20, 20);
        $numbers[] = $number;
    } while ($number != 0);

    array_pop($numbers); 

    $count = count($numbers);
    $max = max($numbers);
    $min = min($numbers);
    $average = array_sum($numbers) / $count;

    echo "Количество чисел: $count<br>";
    echo "Максимум: $max<br>";
    echo "Минимум: $min<br>";
    echo "Среднее значение: $average";
    ?>
</body>

</html>