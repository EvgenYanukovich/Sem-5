<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 8</title>
</head>

<body>
    <?php
    $str = "Anna. David. John. Marie. Zoe";

    $names = explode(". ", $str);

    sort($names);

    $reversedNames = array_reverse($names);
    echo "Отсортированный массив в обратном порядке: " . implode(", ", $reversedNames) . "<br>";

    $firstName = reset($reversedNames);
    $lastName = end($reversedNames);
    echo "Первое имя: $firstName<br>";
    echo "Последнее имя: $lastName<br>";
    ?>
</body>

</html>