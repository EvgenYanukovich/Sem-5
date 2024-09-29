<?php
//1
function my_dump($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//2
function randomList($length)
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(-99, 99);
    }
    return $array;
}

function summList($array)
{
    $sum = 0;
    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $sum += $value;
        }
    }
    return $sum;
}

//3
function generatePassword($length, $includeLetters = true, $includeDigits = true, $includeSymbols = true) {
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}<>?';

    $characters = '';
    if ($includeLetters) $characters .= $letters;
    if ($includeDigits) $characters .= $digits;
    if ($includeSymbols) $characters .= $symbols;

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

//4
function callTwice($func) {
    return function($arg) use ($func) {
        $func($arg);
        $func($arg);
    };
}

function sayHello($name) {
    echo "Hello, $name!<br>";
}

//5
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

function primeNumbersUpTo($max) {
    $primes = [];
    for ($i = 2; $i <= $max; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

//6
function formatDate($date) {
    $dateParts = explode('-', $date);
    if (count($dateParts) === 3 && checkdate($dateParts[1], $dateParts[2], $dateParts[0])) {
        return $dateParts[2] . '.' . $dateParts[1] . '.' . $dateParts[0];
    } else {
        return "Некорректная дата!";
    }
}

//7
function charFrequency($string) {
    $frequency = [];
    $length = strlen($string);
    for ($i = 0; $i < $length; $i++) {
        $char = $string[$i];
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }
    return $frequency;
}

//8
file_put_contents("menu1.txt", "Суп, Борщ, Окрошка\n");
file_put_contents("menu2.txt", "Курица, Свинина, Рыба\n");
file_put_contents("menu3.txt", "Торт, Мороженое, Пирог\n");

function menu() {
    $menu1 = file("menu1.txt", FILE_IGNORE_NEW_LINES);
    $menu2 = file("menu2.txt", FILE_IGNORE_NEW_LINES);
    $menu3 = file("menu3.txt", FILE_IGNORE_NEW_LINES);

    $todayMenu = [
        "Первое блюдо" => $menu1[array_rand($menu1)],
        "Второе блюдо" => $menu2[array_rand($menu2)],
        "Десерт" => $menu3[array_rand($menu3)]
    ];

    file_put_contents("today.txt", "Меню на сегодня:\n");
    foreach ($todayMenu as $course => $dish) {
        file_put_contents("today.txt", "$course: $dish\n", FILE_APPEND);
    }

    return $todayMenu;
}

//9
function my_click() {
    $time = date('Y-m-d H:i:s');
    file_put_contents("time.txt", "Button clicked at: $time\n", FILE_APPEND);
}

?>