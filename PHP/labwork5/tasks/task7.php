<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 7</title>
</head>
<body>
    <?php
    $phoneNumber = "1234567890";

    $countryCode = substr($phoneNumber, 0, 1);
    $areaCode = substr($phoneNumber, 1, 3);
    $mainNumber = substr($phoneNumber, 4);
    
    $formattedNumber = sprintf("+%s (%s) %s-%s0", $countryCode, $areaCode, substr($mainNumber, 0, 3), substr($mainNumber, 3));
    
    echo "Форматированный номер: $formattedNumber<br>";
    ?>
</body>
</html>