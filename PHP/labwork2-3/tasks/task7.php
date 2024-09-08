<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 7</title>
</head>
<body>
<?php
   $a = 5;
   $b = 10;
   
   $result1 = $a > 0 && $b < 15;
   $result2 = !($a < 0);
   
   echo "Результат проверки (a > 0 && b < 15): $result1<br>";
   echo "Проверка отрицательности a (!): $result2<br>";
   
   $price = 1234.56;
   echo "Цена: " . number_format($price, 2, '.', ',') . "<br>";
   
   $strToInt = (int)"1000000";
   $strToFloat = (float)"1000000";
   echo "Целое число: $strToInt<br>";
   echo "Число с плавающей запятой: $strToFloat<br>";
?>
</body>
</html>