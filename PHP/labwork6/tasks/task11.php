<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 11</title>
</head>
<body>
    <?php
    $array1 = ["a" => "apple", "b" => "banana"];
    $array2 = ["b" => "berry", "c" => "cherry"];
    
    $mergedArray = array_merge_recursive($array1, $array2);
    
    print_r($mergedArray);
    echo "<br>";
    
    $countMerged = count($mergedArray);
    echo "Количество элементов в объединённом массиве: $countMerged<br>";
    ?>
</body>
</html>