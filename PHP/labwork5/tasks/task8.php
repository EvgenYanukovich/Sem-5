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
    
    
    $quote = str_replace("жизнь", "Жизнь", $quote);
    
    // Преобразование первой буквы строки в заглавную
    $finalQuote = ucfirst($quote);
    
    echo "Первые 10 символов: $first10Chars<br>";
    echo "Преобразованная цитата: $finalQuote<br>";
    ?>
</body>
</html>