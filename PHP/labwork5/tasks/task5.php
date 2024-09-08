<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5</title>
</head>
<body>
    <?php
    $str = "We are the champions — my friend";

    $firstD = strpos($str, 'd');
    $lastD = strrpos($str, 'd');
    
    $firstEAfter10 = strpos($str, 'e', 10);
    
    echo "Первая буква 'd' на позиции: $firstD<br>";
    echo "Последняя буква 'd' на позиции: $lastD<br>";
    echo "Первая буква 'e' после позиции 10 на позиции: $firstEAfter10<br>";
    ?>
</body>
</html>