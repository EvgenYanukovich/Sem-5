<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 7</title>
</head>

<body>
    <?php
    $str = "abcdefg htsrqmn";
    $n = rand(2, strlen($str)/2);
    $str1 = substr($str, 0, $n);
    $str2 = substr($str, $n, strlen($str) - $n); 
    
    echo '' . $n . "<br>" . $str1 . "<br>" . $str2;

    $symb = substr($str2, (int)strlen($str2)/2);
    $newStr2 = str_replace($symb, "!!." . substr($str2, (int)strlen($str2)/2+1, (int)(strlen($str2)/2)), $str2);

    echo '<br>' . $newStr2;
    ?>
</body>

</html>