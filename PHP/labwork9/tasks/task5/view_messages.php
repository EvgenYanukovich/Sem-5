<?php
session_start();

if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $index => $msg) {
        echo "{$msg['name']} ({$msg['time']}): {$msg['message']} <a href='delete_message.php?index=$index'>Удалить</a><br>";
    }
}
?>
