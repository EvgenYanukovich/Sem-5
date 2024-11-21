<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $supplier_id = (int)$_POST['supplier_id'];
    $check_supplier = $mysqli->query("SELECT is_active FROM suppliers WHERE id = $supplier_id");
    $is_active = $check_supplier->fetch_assoc()['is_active'];

    if ($is_active) {
        $name = $mysqli->real_escape_string($_POST['name']);
        $price = (float)$_POST['price'];
        $category_id = (int)$_POST['category_id'];

        $mysqli->query("INSERT INTO products (name, price, category_id) VALUES ('$name', $price, $category_id)");
    } else {
        echo "Поставщик заблокирован!";
    }
}

header("Location: products.php");
exit;
