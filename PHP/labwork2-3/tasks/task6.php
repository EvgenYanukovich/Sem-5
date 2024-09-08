<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6</title>
</head>
<body>
<?php
   $value = "123";

   $intValue = (int)$value;
   echo "Целое число: $intValue<br>";
  
   $floatValue = (float)$value;
   echo "Число с плавающей запятой: $floatValue<br>";
   
   $sum = $intValue + 10;
   echo "Результат сложения: $sum<br>";
?>
</body>
</html>