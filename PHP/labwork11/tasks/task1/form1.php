<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $date = $_POST['date'] ?? '';
    $fileName = $_POST['fileName'] ?? '';
    $output = '';

    if (preg_match('/^\d{2}\.\d{2}\.\d{2}$/', $date)) {
        $dateParts = explode('.', $date);
        $day = (int)$dateParts[0];
        $month = (int)$dateParts[1];
        $year = 2000 + (int)$dateParts[2];
        if (checkdate($month, $day, $year)) {
            $months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
            $output .= "$day {$months[$month - 1]} $year год.<br>";
        } else {
            $output .= "а ты шалун. Это же не дата.<br>";
        }
    } else {
        $output .= "а ты шалун. Это же не дата.<br>";
    }

    if (preg_match('/^.+\.(\w+)$/', $fileName, $matches)) {
        $extension = strtolower($matches[1]);
        $rasterFormats = ['png', 'jpg', 'jpeg', 'bmp', 'gif'];
        $vectorFormats = ['svg', 'ai', 'eps'];

        if (in_array($extension, $rasterFormats)) {
            $output .= "Это растровый формат изображения.<br>";
        } elseif (in_array($extension, $vectorFormats)) {
            $output .= "Это векторный формат изображения.<br>";
        } else {
            $output .= "<img src='path/to/default/image.jpg' alt='Неизвестный формат'>";
        }
    } else {
        $output .= "<img src='path/to/default/image.jpg' alt='Неизвестный формат'>";
    }
}
?>
<form method="POST">
    <label>Введите дату (например 20.11.16):</label><br>
    <input type="text" name="date"><br>
    <label>Введите имя файла (например lala.png):</label><br>
    <input type="text" name="fileName"><br><br>
    <input type="submit" value="Отправить">
</form>
<?php if (!empty($output)) echo $output; ?>
