<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба №8</title>
</head>

<body>
    <div class="title">
        <h1>Лабораторная работа №8</h1>
        <hr>
    </div>

    <?php
    include './functions.php';

    //1
    echo '<p>Задание 1</p>';

    $exampleArray = [1, 2, 3, 4, 5];
    my_dump($exampleArray);

    echo '<hr>';

    //2
    echo '<p>Задание 2</p>';

    $x = randomList(5);
    $y = randomList(10);
    $z = randomList(15);

    echo "Сумма четных элементов массива X: " . summList($x) . "<br>";
    echo "Сумма четных элементов массива Y: " . summList($y) . "<br>";
    echo "Сумма четных элементов массива Z: " . summList($z) . "<br>";

    echo '<hr>';

    //3
    echo '<p>Задание 3</p>';

    echo generatePassword(12, true, true, true);

    echo '<hr>';

    //4
    echo '<p>Задание 4</p>';

    $callHelloTwice = callTwice('sayHello');
    $callHelloTwice('Anthony');

    echo '<hr>';

    //5
    echo '<p>Задание 5</p>';

    $primes = primeNumbersUpTo(50);
    my_dump($primes);

    echo '<hr>';

    //6
    echo '<p>Задание 6</p>';

    echo formatDate("2024-09-29");

    echo '<hr>';

    //7
    echo '<p>Задание 7</p>';

    $string = "hello world";
    my_dump(charFrequency($string));

    echo '<hr>';

    //8
    echo '<p>Задание 8</p>';

    $todayMenu = menu();
    my_dump($todayMenu);

    echo '<hr>';

    //9
    echo '<p>Задание 9</p>';

    ?>
    <form method="post">
        <button type="submit" name="click">Click me!</button>
    </form>

    <?php
    if (isset($_POST['click'])) {
        my_click();
        echo "Время нажатия записано!";
    }

    ?>
</body>

</html>