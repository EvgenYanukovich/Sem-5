<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6</title>
</head>
<body>
    <?php
    $str = "скоро надо будет писать диплом";

    $firstSpace = strpos($str, ' ') / 2;
    echo "Позиция первого пробела: $firstSpace<br>";
    $secondSpace = (strpos($str, ' ', $firstSpace * 2 + 1) + 1) / 2;
    echo "Позиция второго пробела: $secondSpace<br>";
    
    $str = rtrim($str, "!") . "!";
    
    echo "Результат: $str<br>";
    ?>
</body>
</html>