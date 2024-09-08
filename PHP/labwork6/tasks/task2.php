<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>

<body>
    <?php
    $randomNumbers = array_map(function () {
        return rand(-20, 38);
    }, range(1, 20));

    sort($randomNumbers);

    $firstThree = array_slice($randomNumbers, 0, 3);
    echo "Первые три элемента: " . implode(", ", $firstThree) . "<br>";

    array_splice($randomNumbers, 1, 1, [50]);
    echo "Массив после удаления второго элемента и добавления нового: " . implode(", ", $randomNumbers) . "<br>";

    $index = array_search(50, $randomNumbers);
    echo "Индекс удалённого элемента (50): $index<br>";
    ?>
</body>

</html>