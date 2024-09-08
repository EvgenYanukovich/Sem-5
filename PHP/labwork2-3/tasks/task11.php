<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 11</title>
</head>

<body>
    <?php
    $x = 5;  //0101
    $y = 3;  //0011

    
    $and = $x & $y;   
    $or = $x | $y;    
    $xor = $x ^ $y;  
    $leftShift = $x << 1; 
    $rightShift = $x >> 1; 

    
    echo "x & y = $and<br>";          // 0001 -> 1
    echo "x | y = $or<br>";           // 0111 -> 7
    echo "x ^ y = $xor<br>";          // 0110 -> 6
    echo "x << 1 = $leftShift<br>";   // 1010 -> 10
    echo "x >> 1 = $rightShift<br>";  // 0010 -> 2
    ?>
</body>

</html>