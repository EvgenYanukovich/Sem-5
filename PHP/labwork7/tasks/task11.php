<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 11</title>
</head>

<body>
    <?php
    $s = [
        '12' => ['tovar' => 'Рог Осьминога', 'price' => '12', 'count' => '100'],
        '223' => ['tovar' => 'Голова скунса', 'price' => '8', 'count' => '13'],
        '45' => ['tovar' => 'Шкура дракона', 'price' => '50', 'count' => '20'],
        '67' => ['tovar' => 'Зуб мамонта', 'price' => '5', 'count' => '150'],
        '89' => ['tovar' => 'Клык волка', 'price' => '15', 'count' => '60'],
        '101' => ['tovar' => 'Перо феникса', 'price' => '25', 'count' => '5'],
        '149' => ['tovar' => 'Кость тираннозавра', 'price' => '30', 'count' => '10'],
        '200' => ['tovar' => 'Кожа грифона', 'price' => '40', 'count' => '2']
    ];

    echo "<table border='1'>
    <tr>
        <th>Товар</th>
        <th>Цена (слезинок студентов)</th>
        <th>Количество</th>
    </tr>";

    foreach ($s as $item) {
        echo "<tr>
        <td>{$item['tovar']}</td>
        <td>{$item['price']}</td>
        <td>{$item['count']}</td>
    </tr>";
    }

    echo "</table>";
    ?>

</body>

</html>