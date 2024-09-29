<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 7</title>
</head>

<body>
    <?php
    $birthday = 30; 
    $month = 9; 
    $n = $birthday * $month;

    $numbers = [];
    for ($i = 0; $i < 24; $i++) {
        $numbers[] = rand(1, $n);
    }

    $sumOfSquares = 0;
    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $sumOfSquares += $num ** 2;
        }
    }

    $result = ceil(sqrt($sumOfSquares));
    echo "Результат: $result";
    ?>
</body>

</html>