<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST['text'] ?? '';
    $processedText = preg_replace('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', '[email]', $text);
    echo "<p>Обработанный текст: $processedText</p>";
}
?>
<form method="POST">
    <label>Введите текст:</label><br>
    <textarea name="text"></textarea><br><br>
    <input type="submit" value="Обработать">
</form>
