<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 8</title>
</head>
<body>
<?php
   $stringNum = "42";

   $intNum = (int)$stringNum;
   echo "Целое число: $intNum<br>";
   

   $result = $stringNum + 10;
   echo "Результат: $result<br>";
   echo "Тип переменной result: " . gettype($result) . "<br>";
?>
</body>
</html>