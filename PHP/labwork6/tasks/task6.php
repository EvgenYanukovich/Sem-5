<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6</title>
</head>

<body>
    <?php
    $students = [
        ["name" => "Alice", "age" => 20, "grade" => 85],
        ["name" => "Bob", "age" => 22, "grade" => 78],
        ["name" => "Charlie", "age" => 23, "grade" => 90],
    ];

    $names = array_column($students, "name");
    echo "Имена студентов: " . implode(", ", $names) . "<br>";

    $students = array_map(function ($student) {
        $student["grade"] += 5;
        return $student;
    }, $students);

    echo "Информация о студентах:<br>";
    print_r($students);
    echo "<br>";
    ?>
</body>

</html>