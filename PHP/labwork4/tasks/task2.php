<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>

<body>
    <?php
    echo "PHP_VERSION: " . PHP_VERSION . "<br>";   
    echo "PHP_OS: " . PHP_OS . "<br>";             
    echo "PHP_SAPI: " . PHP_SAPI . "<br>";         // Тип интерфейса сервака
    echo "PHP_INT_MAX: " . PHP_INT_MAX . "<br>";   
    echo "PHP_EOL: " . PHP_EOL . "<br>";           // Символ конца строки (зависит от ОС)

    echo "__LINE__: " . __LINE__ . "<br>";
    echo "__FILE__: " . __FILE__ . "<br>";
    echo "__DIR__: " . __DIR__ . "<br>";
    echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
    echo "__CLASS__: " . __CLASS__ . "<br>";
    echo "__TRAIT__: " . __TRAIT__ . "<br>";
    echo "__METHOD__: " . __METHOD__ . "<br>";
    echo "__NAMESPACE__: " . __NAMESPACE__ . "<br>";
    ?>
</body>

</html>