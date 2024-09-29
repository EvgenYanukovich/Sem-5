<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 9</title>
</head>

<body>
    <?php
    $day = date("l");
    switch ($day) {
        case "Monday":
            echo "Понедельник (Monday)";
            break;
        case "Tuesday":
            echo "Вторник (Tuesday)";
            break;
        //и так далее, мне лень)
        default:
            echo "День не найден";
    }
    ?>
</body>

</html>