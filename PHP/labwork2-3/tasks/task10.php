<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 10</title>
</head>

<body>
    <?php
    $userName = "John";
    $userAge = 30;
    $userBalance = 1234.5678;

    
    echo "Имя: $userName, Возраст: [$userAge], Баланс: " . number_format($userBalance, 2) . "<br>";
    ?>
</body>

</html>