<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 10</title>
</head>

<body>
    <?php
    $str1 = "19.53";
    $str2 = "20";

    function FunctionName($str) : string {
        $arr = explode('.', $str);
        $rub = $arr[0];
        if (count($arr) == 2) {
            $cop = $arr[1];
        }
        else {
            $cop = 0;
        }
        $newString = "$rub руб. $cop коп.";
        return $newString;
    }

    echo FunctionName($str1) . '</br>';
    echo FunctionName($str2);
    ?>
</body>

</html>