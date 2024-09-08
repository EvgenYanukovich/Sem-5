<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 10</title>
</head>
<body>
    <?php
    $array1 = [1, 2, 3, 4];
    $array2 = [3, 4, 5, 6];
    
    $diff = array_diff($array1, $array2);
    echo "Разница между массивами: " . implode(", ", $diff) . "<br>";
    
    $intersect = array_intersect($array1, $array2);
    echo "Общие значения: " . implode(", ", $intersect) . "<br>";
    ?>
</body>
</html>