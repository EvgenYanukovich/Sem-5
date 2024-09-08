<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 7</title>
</head>

<body>
    <?php
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    $chunkedMonths = array_chunk($months, 3);

    foreach ($chunkedMonths as $index => $chunk) {
        echo "Часть " . ($index + 1) . ": " . implode(", ", $chunk) . "<br>";
    }

    $partsCount = count($chunkedMonths);
    echo "Количество частей: $partsCount<br>";
    ?>
</body>

</html>