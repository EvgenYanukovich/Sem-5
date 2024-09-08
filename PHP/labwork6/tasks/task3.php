<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>

<body>
    <?php
    $person = [
        "name" => "John",
        "age" => 30,
        "email" => "john@example.com",
    ];

    $keys = array_keys($person);
    echo "Ключи: " . implode(", ", $keys) . "<br>";

    $values = array_values($person);
    echo "Значения: " . implode(", ", $values) . "<br>";

    $person["gender"] = "male";
    print_r($person);
    echo "<br>";
    ?>
</body>

</html>