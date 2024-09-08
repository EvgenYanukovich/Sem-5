<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5</title>
</head>
<body>
    <?php
    $products = [
        "apple" => 50,
        "banana" => 30,
        "cherry" => 70,
        "orange" => 40,
        "grape" => 60,
    ];
    
    $productNames = array_keys($products);
    echo "Продукты: " . implode(", ", $productNames) . "<br>";
    
    $maxPrice = max(array_values($products));
    echo "Самая высокая цена: $maxPrice<br>";
    
    foreach ($products as $product => $price) {
        echo "$product: $price<br>";
    }
    ?>
</body>
</html>