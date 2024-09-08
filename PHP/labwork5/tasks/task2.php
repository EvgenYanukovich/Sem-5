<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>

<body>
    <?php
    $mainstr = "abcdefg12345sub_str67890";
    $sub_str = "sub_str";
    
    $position = strpos($mainstr, $sub_str);
    
    if ($position !== false) {
        $before = substr($mainstr, $position - 2, 2);
        $after = substr($mainstr, $position + strlen($sub_str), 4);

        echo "Результат: '$before' '$sub_str' '$after'<br>";
    } else {
        echo "Подстрока не найдена<br>";
    }
    ?>
</body>

</html>