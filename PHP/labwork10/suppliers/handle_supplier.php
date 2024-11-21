<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'add') {
        $name = $mysqli->real_escape_string($_POST['name']);
        $mysqli->query("INSERT INTO suppliers (name, is_active) VALUES ('$name', 1)");

    } elseif ($action === 'block') {
        $supplier_id = (int)$_POST['supplier_id'];
        $mysqli->query("UPDATE suppliers SET is_active = 0 WHERE id = $supplier_id");
    }
}

header("Location: suppliers.php");
exit;
?>
