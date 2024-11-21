<?php
$mysqli = new mysqli("MySQL-8.2", "root", "", "Mini_shop");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query("INSERT INTO categories (name) VALUES ('$name')");
}

header("Location: categories.php");
exit;
