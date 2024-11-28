<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fio = $_POST['fio'] ?? '';
    $birthDate = $_POST['birthDate'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $errors = [];

    if (!preg_match('/^[А-ЯЁ][а-яё]{3,} [А-ЯЁ][а-яё]{3,} [А-ЯЁ][а-яё]{3,}$/u', $fio)) {
        $errors[] = "ФИО указано некорректно.";
    }

    if (!preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $birthDate) || !strtotime($birthDate)) {
        $errors[] = "Дата рождения указана некорректно.";
    }

    if (!preg_match('/^[a-zA-Z0-9]{10,20}@(bstu\.ru|bstu\.com|shiman\.ru|shiman\.com)$/', $email)) {
        $errors[] = "E-mail указан некорректно.";
    }

    if (!preg_match('/^\(029\) \d{3}-\d{2}-\d{2}$/', $phone)) {
        $errors[] = "Номер телефона указан некорректно.";
    }

    if (empty($errors)) {
        echo "Данные указаны корректно.";
    } else {
        echo implode('<br>', $errors);
    }
}
?>
<form method="POST">
    <label>ФИО (через пробел):</label><br>
    <input type="text" name="fio"><br>
    <label>Дата рождения (dd.mm.yyyy):</label><br>
    <input type="text" name="birthDate"><br>
    <label>E-mail:</label><br>
    <input type="text" name="email"><br>
    <label>Номер телефона ((029) 123-45-67):</label><br>
    <input type="text" name="phone"><br><br>
    <input type="submit" value="Проверить">
</form>
