<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>

<body>
    <?php
    $fullName = "янукович евгений дмитриевич";

    $nameParts = explode(" ", $fullName);

    $nameParts = array_map(function ($part) {
        return mb_convert_case($part, MB_CASE_TITLE, "UTF-8");
    }, $nameParts);

    $finalName = implode(" ", $nameParts);

    echo "Результат: $finalName<br>";
    ?>
</body>

</html>