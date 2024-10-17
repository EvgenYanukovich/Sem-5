<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6</title>
</head>

<body>
    <?php
    $t = rand(1, 9);
    $v = rand(1, 9);

    $result = (((sin(2/M_PI) + exp($t)))/(log(pow(1 + $t*$t + $v*$v, 3)))) * pow(($t*$t) - ($v*$v), 1/3);

    echo "Результат " . $result;
    ?>
</body>

</html>