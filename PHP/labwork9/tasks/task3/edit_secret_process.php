<?php
session_start();
if (isset($_GET['new_secret'])) {
    $_SESSION['secret'] = htmlspecialchars($_GET['new_secret']);
}
header('Location: show_secret.php');
?>
