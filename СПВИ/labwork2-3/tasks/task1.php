<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
<?php
    $bool1 = true;
    $bool2 = false;
    $bool3 = true;
    
    $sum = $bool1 + $bool2 + $bool3;
    $sub = $bool1 - $bool2 - $bool3;
    $mul = $bool1 * $bool2 * $bool3;
    $div = $bool1 / ($bool2 + 1); 
    
    echo "Сумма: $sum<br>";
    echo "Разность: $sub<br>";
    echo "Произведение: $mul<br>";
    echo "Деление: $div<br>";
?>
</body>
</html>