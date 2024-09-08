<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>

<body>
    <?php
    $x = rand();
    $y = rand();
    $z = rand();

    $result1 = sin(M_PI_4 * $x) * sqrt(abs(($y + log($z * $z + 1)) / ($x + $y + $z)));
    $result2 = $x * exp(-abs($x + $y) / 2) + cos(log10(1 + abs($y))) + pow($z, 1 / 3);

    echo "result1: " . $result1 . "<br>";
    echo "result2: " . $result2 . "<br>";   
    ?>
</body>

</html>