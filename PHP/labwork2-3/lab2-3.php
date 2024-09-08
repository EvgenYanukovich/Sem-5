<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            text-align: center;
        }

        .title {
            text-align: center;
            border-bottom: solid;
            padding-bottom: 20px;
        }

        .menu {
            margin-top: 50px;
        }

        .c {
            border: 1px solid #333;
            /* Рамка */
            display: inline-block;
            padding: 10px 20px;
            /* Поля */
            margin: 10px 20px;
            text-decoration: none;
            /*Убираем подчеркивание color: #000;*/
            /* Цвет текста */
        }

        .c:hover {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            /* Тень */
            background: linear-gradient(to bottom, #fcfff4,
                    #e9e9ce);
            /* Градиент */
            color: #a00;
        }
    </style>
    <title>Лаба №3-4</title>
</head>
<body>
    <div class="title">
        <h1>Лабораторная работа №2</h1>
        <hr>
    </div>

    <div class="menu">
        <a href="tasks/task1.php" class="c">Задача №1</a>
        <a href="tasks/task2.php" class="c">Задача №2</a>
        <a href="tasks/task3.php" class="c">Задача №3</a>
        <a href="tasks/task4.php" class="c">Задача №4</a>
        <a href="tasks/task5.php" class="c">Задача №5</a>
        <a href="tasks/task6.php" class="c">Задача №6</a>
        <a href="tasks/task7.php" class="c">Задача №7</a>
        <a href="tasks/task8.php" class="c">Задача №8</a>
        <a href="tasks/task9.php" class="c">Задача №9</a>
        <a href="tasks/task10.php" class="c">Задача №10</a>
        <a href="tasks/task11.php" class="c">Задача №11</a>
    </div>
</body>
</html>