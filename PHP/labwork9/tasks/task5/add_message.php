<?php
session_start();

if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

$message = [
    'name' => htmlspecialchars($_POST['name']),
    'message' => htmlspecialchars($_POST['message']),
    'time' => date('H:i')
];

$_SESSION['messages'][] = $message;
header('Location: view_messages.php');
?>
