<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 9</title>
</head>

<body>
    <?php
    $sentence = "Жизнь — это не только жизнь, но и борьба.";
    $wordToFind = "жизнь";

    $position = strpos(strtolower($sentence), strtolower($wordToFind));

    if ($position === false) {
        echo "Слово не найдено<br>";
    } else {
        $censoredSentence = str_replace($wordToFind, "****", $sentence);

        echo "Результат замены: $censoredSentence<br>";
        echo "Оригинальная строка в нижнем регистре: " . strtolower($sentence) . "<br>";
    }
    ?>
</body>

</html>