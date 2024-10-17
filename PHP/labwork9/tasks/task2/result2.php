<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $hidden_password = preg_replace('/.(?!$)/', '#', $password);
    
    echo "Логин: $login<br>";
    echo "Пароль: $hidden_password<br>";
}
?>
