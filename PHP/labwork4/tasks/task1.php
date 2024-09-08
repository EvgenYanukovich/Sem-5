<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>

<body>
    <?php
    const f = 30;
    const s = 9;

    define("l", 2004);
    define("k", 4);

    $result = pow(l, k) + sqrt(f) - 2 * s + log(s + l);

    echo "Результат " . $result;
    ?>
</body>

</html>