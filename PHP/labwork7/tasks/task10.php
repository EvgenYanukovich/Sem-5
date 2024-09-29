<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 10</title>
</head>

<body>
    <?php
    $s = [
        0 => ['text' => 'ПРИВЕТ Андрей!', 'tag' => 'h1', 'color' => 'red'],
        1 => ['text' => 'Добро пожаловать на сайт!', 'tag' => 'p', 'color' => 'blue'],
        2 => ['text' => 'Заголовок раздела', 'tag' => 'h2', 'color' => 'green'],
        3 => ['text' => 'Пожалуйста, свяжитесь с нами', 'tag' => 'span', 'color' => 'purple'],
        4 => ['text' => 'Пример текста', 'tag' => 'div', 'color' => 'orange'],
        5 => ['text' => 'Контактная информация', 'tag' => 'h3', 'color' => 'black'],
        6 => ['text' => 'Успешное завершение задачи!', 'tag' => 'p', 'color' => 'gray'],
        7 => ['text' => 'Помогите', 'tag' => 'span', 'color' => 'green'],
        8 => ['text' => 'До свидания', 'tag' => 'h4', 'color' => 'brown']
    ];

    foreach ($s as $element) {
        echo "<{$element['tag']} style='color: {$element['color']}'>{$element['text']}</{$element['tag']}><br>";
    }
    ?>
</body>

</html>