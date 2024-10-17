<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Результаты опроса:</h2>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Дата: " . htmlspecialchars($_POST['date']) . "<br>";
    echo "Пол: " . htmlspecialchars($_POST['gender']) . "<br>";
    echo "Согласие: " . htmlspecialchars($_POST['agree']) . "<br>";
    echo "Скрытое поле: " . htmlspecialchars($_POST['hiddenField']) . "<br>";
    echo "Страна: " . htmlspecialchars($_POST['country']) . "<br>";
    echo "Телефон: " . htmlspecialchars($_POST['tel']) . "<br>";
    echo "Вебсайт: " . htmlspecialchars($_POST['website']) . "<br>";
    echo "Цвет: " . htmlspecialchars($_POST['color']) . "<br>";
}
?>
