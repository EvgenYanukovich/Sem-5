<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

$result = $mysqli->query("SELECT * FROM suppliers");
echo "<h1>Поставщики</h1><ul>";
while ($row = $result->fetch_assoc()) {
    $status = $row['is_active'] ? "Активен" : "Заблокирован";
    echo "<li>" . htmlspecialchars($row['name']) . " — Статус: $status</li>";
}
echo "</ul>";
?>

<h2>Добавить нового поставщика</h2>
<form action="handle_supplier.php" method="POST">
    <input type="text" name="name" placeholder="Название поставщика" required>
    <input type="hidden" name="action" value="add">
    <button type="submit">Добавить поставщика</button>
</form>

<h2>Блокировать поставщика</h2>
<form action="handle_supplier.php" method="POST">
    <input type="number" name="supplier_id" placeholder="ID поставщика" required>
    <input type="hidden" name="action" value="block">
    <button type="submit">Заблокировать поставщика</button>
</form>

<a href="../categories/categories.php">Категории</a>
<a href="../products/products.php">Товары</a>
