<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 4</title>
</head>

<body>
    <?php
    $numbers = [
        '111' => 111,          
        '1010110' => bindec('1010110'), 
        '144' => octdec(144),         
        '3F' => hexdec('3F')   
    ];
    
    echo "<table border='1' cellpadding='8' cellspacing='0' style='text-align: center;'>";
    echo "<tr>";
    echo "<th>Исходное число</th>";
    echo "<th>В 10-ной системе</th>";
    echo "<th>В 2-ной системе</th>";
    echo "<th>В 8-ной системе</th>";
    echo "<th>В 16-ной системе</th>";
    echo "</tr>";
    
    foreach ($numbers as $key => $value) {
        echo "<tr>";
        echo "<td><b>$key</b></td>";
        
        echo "<td" . ($key == (string)$value ? ">-" : ">$value") . "</td>";
        $binValue = decbin($value);
        echo "<td" . ($key == $binValue ? ">-" : ">$binValue") . "</td>";
        $octValue = decoct($value);
        echo "<td" . ($key == $octValue ? ">-" : ">$octValue") . "</td>";
        $hexValue = strtoupper(dechex($value)); 
        echo "<td" . ($key == $hexValue ? ">-" : ">$hexValue") . "</td>";
        
        echo "</tr>";
    }
    
    echo "</table>";
    ?>

    <h2>juhuijj <?= $numbers['111']?></h2>

</body>

</html>