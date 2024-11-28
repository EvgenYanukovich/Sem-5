<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $pattern = '/^[a-zA-Z_]+@[a-zA-Z]{3,}\.[a-z]{2,4}$/';
    $errors = [];

    if (strlen($email) > 15) {
        $errors[] = "Длина email не должна превышать 15 символов.";
    }
    if (!strpos($email, '@') || !preg_match($pattern, $email)) {
        $errors[] = "Email некорректен.";
    }
    if (substr_count($email, '_') > 1) {
        $errors[] = "Символ '_' может встречаться только один раз.";
    }

    echo empty($errors) ? "Email корректен." : implode('<br>', $errors);
}
?>
<form method="POST">
    <label>Введите email:</label><br>
    <input type="text" name="email"><br><br>
    <input type="submit" value="Проверить">
</form>
