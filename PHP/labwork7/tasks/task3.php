<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>

<body>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0 || $i % 9 == 0) {
            $sum += $i;
        }
    }
    echo "Сумма: $sum<br>";

    $product = 1;
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $product *= $i;
        }
    }
    echo "Произведение: $product";
    ?>

</body>

</html>