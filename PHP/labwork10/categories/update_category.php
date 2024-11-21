<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = (int)$_POST['category_id'];
    $new_name = $mysqli->real_escape_string($_POST['new_name']);
    $mysqli->query("UPDATE categories SET name = '$new_name' WHERE id = $category_id");
}

header("Location: categories.php");
exit;
?>
