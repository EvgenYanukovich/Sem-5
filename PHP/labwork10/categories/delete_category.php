<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = (int)$_POST['category_id'];
    $mysqli->query("DELETE FROM categories WHERE id = $category_id");
}

header("Location: categories.php");
exit;
?>
