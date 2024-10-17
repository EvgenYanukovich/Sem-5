<?php
session_start();

if (isset($_GET['index']) && isset($_SESSION['messages'][$_GET['index']])) {
    $index = $_GET['index'];
    $deleted_message = $_SESSION['messages'][$index];

    $log_message = "Удалено сообщение: Имя: {$deleted_message['name']}, Время: {$deleted_message['time']}, Сообщение: {$deleted_message['message']}\n";
    $log_message .= "Дата удаления: " . date('Y-m-d H:i:s') . "\n\n";
    
    file_put_contents('log.txt', $log_message, FILE_APPEND);

    unset($_SESSION['messages'][$index]);

    $_SESSION['messages'] = array_values($_SESSION['messages']);

    header('Location: view_messages.php');
    exit;
} else {
    header('Location: view_messages.php');
    exit;
}
