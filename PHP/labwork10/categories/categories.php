<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

$result = $mysqli->query("SELECT * FROM categories");
echo "<h1>Категории</h1><ol>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . htmlspecialchars($row['name']) . "</li>";
}
echo "</ol>";
?>

<form action="add_category.php" method="POST">
    <input type="text" name="name" placeholder="Новая категория" required>
    <button type="submit">Добавить категорию</button>
</form>

<form action="delete_category.php" method="POST">
    <input type="number" name="category_id" placeholder="ID категории для удаления" required>
    <button type="submit">Удалить категорию</button>
</form>

<form action="update_category.php" method="POST">
    <input type="number" name="category_id" placeholder="ID категории" required>
    <input type="text" name="new_name" placeholder="Новое имя" required>
    <button type="submit">Изменить категорию</button>
</form>

<a href="../products/products.php">Товары</a>
<a href="../suppliers/suppliers.php">Поставщики</a>
