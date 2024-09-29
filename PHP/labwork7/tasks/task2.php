<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>

<body>
    <?php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    $min = min($a, $b, $c);

    if ($min >= 9):
        echo "Вы отличник! Поздравляю!";
    elseif ($min > 4):
        echo "Вы сдали";
    else:
        echo "Вас отчислят";
    endif;
    ?>
</body>

</html>