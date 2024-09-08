<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>

<body>
    <?php
    $fruits = ["apple", "banana", "cherry"];

    array_push($fruits, "orange");
    $reversedFruits = array_reverse($fruits);
    array_pop($reversedFruits);
    
    echo "Изначальный массив: " . implode(", ", $fruits) . "<br>";
    echo "Результат после удаления последнего элемента из перевёрнутого массива: " . implode(", ", $reversedFruits) . "<br>";
    ?>
</body>

</html>