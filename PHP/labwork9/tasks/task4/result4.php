<?php
session_start();
$_SESSION['user'] = [
    'name' => htmlspecialchars($_GET['name']),
    'age' => htmlspecialchars($_GET['age']),
    'gender' => htmlspecialchars($_GET['gender']),
    'time' => date('Y-m-d H:i:s')
];

$gender_image = $_SESSION['user']['gender'] === 'male' ? 'male.jpg' : 'female.jpg';
echo "<img src='$gender_image' style='max-height: 700px' alt='Gender Image'><br>";
echo "<a href='session_data.php'>Посмотреть данные сессии</a>";
