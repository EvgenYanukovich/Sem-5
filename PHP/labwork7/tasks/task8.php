<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 8</title>
</head>

<body>
    <?php
    $words = [];
    for ($i = 0; $i < 10; $i++) {
        $words[] = "Помогите!";
    }

    echo implode("<br>", $words);
    ?>
</body>

</html>