<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 5;
    $c = 3;

    if ($a > $b && $a > $c) {
        echo "Число A больше чисел B и C";
    } elseif ($b > $a && $b > $c) {
        echo "Число B больше чисел A и C";
    } else {
        echo "Число C больше чисел A и B";
    }
    ?>
</body>

</html>