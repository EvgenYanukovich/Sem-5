<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5</title>
</head>
<body>
<?php
 
$float1 = 7E-1; 
$float2 = 4.56;
$float3 = 1_237.89;
$float4 = 0.1e2; 
$float5 = .7;    
$float6 = 15/82;
$float7 = 3.14;
$float8 = 2.71;
$float9 = 6.022e23; 
$float10 = 1.618;


$str1 = 'Hello';
$str2 = "World";
$str3 = <<<EOT
PHP
EOT;

echo "$float1, $float2, $float3<br>"; 
print("$str1, $str2, $str3<br>");      
var_dump($float4, $float5, $float6);  
?>
</body>
</html>