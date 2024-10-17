<?php
session_start();
if (isset($_GET['secret'])) {
    $_SESSION['secret'] = htmlspecialchars($_GET['secret']);
}
?>
<a href="show_secret.php">Показать секретное слово</a><br>
<a href="edit_secret.php">Изменить секретное слово</a>
