<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>

<body>
    <?php
    $firstName = "Евгений";
    $lastName = "Янукович";

    $fullName = sprintf("%s %s", $firstName, $lastName);
    $length = strlen($fullName);

    echo "Полное имя: $fullName<br>";
    echo "Длина строки: $length<br>";
    ?>
</body>

</html>