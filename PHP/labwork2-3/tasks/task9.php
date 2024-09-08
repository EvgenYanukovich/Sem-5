<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 9</title>
</head>

<body>
    <?php
    $str = "Hello";
    $int = 123;
    $float = 45.67;
    $bool = true;

    var_dump($str, $int, $float, $bool) . "<br>";

    echo "is_string: " . is_string($str) . "<br>";
    echo "is_int: " . is_int($int) . "<br>";
    echo "is_float: " . is_float($float) . "<br>";
    echo "is_bool: " . is_bool($bool) . "<br>";
    ?>
</body>

</html>