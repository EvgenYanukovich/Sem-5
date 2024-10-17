<?php
session_start();
echo "<table border='1'>
    <tr><th>Имя</th><th>Возраст</th><th>Пол</th><th>Время</th></tr>";
echo "<tr>
    <td>{$_SESSION['user']['name']}</td>
    <td>{$_SESSION['user']['age']}</td>
    <td>{$_SESSION['user']['gender']}</td>
    <td>{$_SESSION['user']['time']}</td>
</tr></table>";

