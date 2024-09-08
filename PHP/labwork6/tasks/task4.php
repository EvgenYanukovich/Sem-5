<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 4</title>
</head>
<body>
    <?php
    $array1 = [1, 20, 3, 4, 15, 6];
    $array2 = [1, 10, 15, 20, 14, 25];
    
    $mergedArray = array_merge($array1, $array2);
    
    $uniqueArray = array_unique($mergedArray);
    
    $count = count($uniqueArray);
    echo "Количество элементов в массиве: $count<br>";
    
    $evenNumbers = array_filter($uniqueArray, function($num) {
        return $num % 2 === 0;
    });
    
    $squares = array_map(function($num) {
        return $num ** 2;
    }, $evenNumbers);
    echo "Квадраты чётных чисел: " . implode(", ", $squares) . "<br>";
    
    $sumOfSquares = array_sum($squares);
    echo "Сумма квадратов: $sumOfSquares<br>";
    ?>
</body>
</html>