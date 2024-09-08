<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
<?php 
   echo var_dump((bool) 0) . "<br>";         // false
   echo var_dump((bool)1) . "<br>";              // true
   echo var_dump((bool)-1) . "<br>";             // true
   echo var_dump((bool)"") . "<br>";             // false
   echo var_dump((bool)"hello") . "<br>";        // true
   echo var_dump((bool)null) . "<br>";           // false
   echo var_dump((bool)[]) . "<br>";             // false
   echo var_dump((bool)[1, 2, 3]) . "<br>";      // true
   echo var_dump((bool)0.0) . "<br>";            // false
   echo var_dump((bool)0.1) . "<br>";            // true
   echo var_dump((bool)"0") . "<br>";            // false
   echo var_dump((bool)"1") . "<br>";            // true
   echo var_dump((bool)"false") . "<br>";        // true
   echo var_dump((bool)new stdClass()) . "<br>"; // true
   echo var_dump((bool)INF) . "<br>";            // true
?>
</body>
</html>