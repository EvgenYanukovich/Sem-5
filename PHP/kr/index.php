<?php
// Массив товаров
$products = [
    ['название' => 'Телефон', 'производитель' => 'Samsung', 'цена' => 30000, 'цвет' => 'Черный'],
    ['название' => 'Телевизор', 'производитель' => 'LG', 'цена' => 50000, 'цвет' => 'Серый'],
    ['название' => 'Ноутбук', 'производитель' => 'Apple', 'цена' => 100000, 'цвет' => 'Белый'],
    ['название' => 'Наушники', 'производитель' => 'Sony', 'цена' => 7000, 'цвет' => 'Черный'],
    ['название' => 'Монитор', 'производитель' => 'Dell', 'цена' => 20000, 'цвет' => 'Серый']
];

// Фильтруем данные на основе введенных условий
$filtered_products = $products;

// Получаем данные из формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_filter = $_POST['name'] ?? '';
    $min_price = $_POST['min_price'] ?? 0;
    $max_price = $_POST['max_price'] ?? PHP_INT_MAX;
    $manufacturers = $_POST['manufacturers'] ?? [];
    $color_filter = $_POST['color'] ?? '';

    if ($name_filter) {
        $filtered_products = array_filter($filtered_products, function($product) use ($name_filter) {
            return strpos(mb_strtolower($product['название'], 'UTF-8'), mb_strtolower($name_filter, 'UTF-8')) !== false;
        });
    }
    

    // Применяем фильтрацию по диапазону цен
    $filtered_products = array_filter($filtered_products, function($product) use ($min_price, $max_price) {
        return $product['цена'] >= $min_price && $product['цена'] <= $max_price;
    });

    // Применяем фильтрацию по производителю
    if (!empty($manufacturers)) {
        $manufacturers = array_map('strtolower', $manufacturers); // Приводим производителей к нижнему регистру
        $filtered_products = array_filter($filtered_products, function($product) use ($manufacturers) {
            return in_array(strtolower($product['производитель']), $manufacturers);
        });
    }

    // Применяем фильтрацию по цвету
    if ($color_filter) {
        $color_filter = strtolower($color_filter); // Приводим фильтр цвета к нижнему регистру
        $filtered_products = array_filter($filtered_products, function($product) use ($color_filter) {
            return strtolower($product['цвет']) == $color_filter;
        });
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фильтрация товаров</title>
</head>
<body>
    <h1>Фильтрация товаров</h1>
    
    <!-- Форма фильтрации -->
    <form method="POST">
        <label for="name">Название товара:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($name_filter ?? '') ?>">
        <br><br>

        <label for="min_price">Минимальная цена:</label>
        <input type="number" name="min_price" id="min_price" value="<?= htmlspecialchars($min_price ?? 0) ?>">
        <br><br>

        <label for="max_price">Максимальная цена:</label>
        <input type="number" name="max_price" id="max_price" value="<?= htmlspecialchars($max_price ?? PHP_INT_MAX) ?>">
        <br><br>

        <label>Производители:</label><br>
        <input type="checkbox" name="manufacturers[]" value="Samsung" <?= in_array('Samsung', $manufacturers ?? []) ? 'checked' : '' ?>> Samsung<br>
        <input type="checkbox" name="manufacturers[]" value="LG" <?= in_array('LG', $manufacturers ?? []) ? 'checked' : '' ?>> LG<br>
        <input type="checkbox" name="manufacturers[]" value="Apple" <?= in_array('Apple', $manufacturers ?? []) ? 'checked' : '' ?>> Apple<br>
        <input type="checkbox" name="manufacturers[]" value="Sony" <?= in_array('Sony', $manufacturers ?? []) ? 'checked' : '' ?>> Sony<br>
        <input type="checkbox" name="manufacturers[]" value="Dell" <?= in_array('Dell', $manufacturers ?? []) ? 'checked' : '' ?>> Dell<br>
        <br>

        <label for="color">Цвет:</label>
        <select name="color" id="color">
            <option value="">Выберите цвет</option>
            <option value="Черный" <?= strtolower($color_filter ?? '') == 'черный' ? 'selected' : '' ?>>Черный</option>
            <option value="Серый" <?= strtolower($color_filter ?? '') == 'серый' ? 'selected' : '' ?>>Серый</option>
            <option value="Белый" <?= strtolower($color_filter ?? '') == 'белый' ? 'selected' : '' ?>>Белый</option>
        </select>
        <br><br>

        <input type="submit" value="Применить фильтры">
    </form>


    <h2>Результаты:</h2>
    <ul>
        <?php if (empty($filtered_products)): ?>
            <li>Нет товаров, соответствующих фильтрам.</li>
        <?php else: ?>
            <?php foreach ($filtered_products as $product): ?>
                <li>
                    <strong><?= htmlspecialchars($product['название']) ?></strong><br>
                    Производитель: <?= htmlspecialchars($product['производитель']) ?><br>
                    Цена: <?= htmlspecialchars($product['цена']) ?> руб.<br>
                    Цвет: <?= htmlspecialchars($product['цвет']) ?><br>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>