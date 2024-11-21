<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

$result = $mysqli->query("
    SELECT products.*, categories.name AS category_name 
    FROM products 
    JOIN categories ON products.category_id = categories.id
");

echo "<h1>Товары</h1><div>";
while ($row = $result->fetch_assoc()) {
    echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px;'>";
    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
    echo "<p>Категория: " . htmlspecialchars($row['category_name']) . "</p>";
    echo "<p>Цена: " . htmlspecialchars($row['price']) . "</p>";
    echo "</div>";
}
echo "</div>";
?>

<h2>Добавить новый продукт</h2>
<form action="add_product.php" method="POST">
    <input type="text" name="name" placeholder="Название продукта" required>
    <input type="number" step="0.01" name="price" placeholder="Цена" required>
    
    <select name="category_id" required>
        <?php
        $categories = $mysqli->query("SELECT * FROM categories");
        while ($category = $categories->fetch_assoc()) {
            echo "<option value='" . $category['id'] . "'>" . htmlspecialchars($category['name']) . "</option>";
        }
        ?>
    </select>
    
    <button type="submit">Добавить продукт</button>
</form>

<a href="../categories/categories.php">Категории</a>
<a href="../suppliers/suppliers.php">Поставщики</a>
