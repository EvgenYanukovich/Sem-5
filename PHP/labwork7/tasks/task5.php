<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5</title>
</head>

<body>
    <?php
    $students = [
        'Иван' => 5,
        'Мария' => 4,
        'Петр' => 3,
        'Анна' => 2
    ];

    $groups = [
        'Отличники' => [],
        'Хорошисты' => [],
        'Троечники' => []
    ];

    foreach ($students as $name => $grade) {
        if ($grade == 5) {
            $groups['Отличники'][] = $name;
        } elseif ($grade == 4) {
            $groups['Хорошисты'][] = $name;
        } else {
            $groups['Троечники'][] = $name;
        }
    }

    echo "<ul>";
    foreach ($groups as $group => $names) {
        echo "<li>$group<ul>";
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
        echo "</ul></li>";
    }
    echo "</ul>";
    ?>
</body>

</html>