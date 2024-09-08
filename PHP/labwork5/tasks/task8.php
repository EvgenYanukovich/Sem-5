<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 8</title>
</head>
<body>
    <?php
    $quote = "жизнь прекрасна, но жизнь бывает сложной.";

    $first10Chars = substr($quote, 0, 19);
    
    // Замена всех вхождений слова "жизнь" на "Жизнь"
    $quote = str_replace("жизнь", "Жизнь", $quote);
    
    // Преобразование первой буквы строки в заглавную
    $finalQuote = ucfirst($quote);
    
    // Выводим результат
    echo "Первые 10 символов: $first10Chars<br>";
    echo "Преобразованная цитата: $finalQuote<br>";
    ?>
</body>
</html>