-- Создание базы данных
CREATE DATABASE BaseMysql_Yan;
USE BaseMysql_Yan;

CREATE TABLE Части (
    ID INT PRIMARY KEY,
    Название VARCHAR(100) NOT NULL,
    Страна_дислокации VARCHAR(100) NOT NULL,
    Город VARCHAR(100) NOT NULL,
    Адрес VARCHAR(200) NOT NULL,
    Занимаемая_площадь FLOAT NOT NULL,
    Кол_во_сооружений INT NOT NULL
);

CREATE TABLE Виды_войск (
    ID INT PRIMARY KEY,
    Название VARCHAR(100) NOT NULL,
    Количество_рот INT NOT NULL
);

CREATE TABLE Техника (
    ID INT PRIMARY KEY,
    Название VARCHAR(100) NOT NULL,
    Часть INT,
    Характеристики VARCHAR(1000),
    FOREIGN KEY (Часть) REFERENCES Части(ID)
);

CREATE TABLE Вооружение (
    ID INT PRIMARY KEY,
    Название VARCHAR(100) NOT NULL,
    Часть INT,
    Характеристики VARCHAR(1000),
    FOREIGN KEY (Часть) REFERENCES Части(ID)
);

CREATE TABLE Военнослужащие (
    ID INT PRIMARY KEY,
    Фамилия VARCHAR(100) NOT NULL,
    Имя VARCHAR(100) NOT NULL,
    Часть INT,
    FOREIGN KEY (Часть) REFERENCES Части(ID),
    Вид_войск INT,
    FOREIGN KEY (Вид_войск) REFERENCES Виды_войск(ID)
);

INSERT INTO Части (ID, Название, Страна_дислокации, Город, Адрес, Занимаемая_площадь, Кол_во_сооружений)
VALUES
(1, 'Часть 1', 'Россия', 'Москва', 'ул. Ленина, 5', 150.5, 10),
(2, 'Часть 2', 'Беларусь', 'Минск', 'ул. Победы, 7', 200.0, 12),
(3, 'Часть 3', 'Казахстан', 'Алматы', 'ул. Абая, 8', 180.0, 8);

INSERT INTO Виды_войск (ID, Название, Количество_рот)
VALUES
(1, 'Пехота', 5),
(2, 'Танковые войска', 3),
(3, 'Артиллерия', 4);

INSERT INTO Техника (ID, Название, Часть, Характеристики)
VALUES
(1, 'Танк Т-90', 2, 'Броня усилена, калибр 125 мм'),
(2, 'БТР-80', 1, '8-колёсный бронетранспортёр'),
(3, 'Гаубица', 3, '152-мм самоходная артиллерийская установка');

INSERT INTO Вооружение (ID, Название, Часть, Характеристики)
VALUES
(1, 'Автомат АК-47', 1, 'Калибр 7.62 мм, магазин на 30 патронов'),
(2, 'Пистолет Макарова', 2, 'Калибр 9 мм'),
(3, 'Гранатомёт РПГ-7', 3, 'Противотанковое оружие');

INSERT INTO Военнослужащие (ID, Фамилия, Имя, Часть, Вид_войск)
VALUES
(1, 'Иванов', 'Алексей', 1, 1),
(2, 'Сидоров', 'Борис', 2, 2),
(3, 'Петров', 'Владимир', 3, 3);

-- 2
SELECT Фамилия, Имя, Часть FROM Военнослужащие;

SELECT Фамилия AS Last_Name, Имя AS First_Name FROM Военнослужащие;

SELECT Название, IF(Кол_во_сооружений > 10, 'Много зданий', 'Мало зданий') AS Здания
FROM Части;

SELECT Название, Занимаемая_площадь 
FROM Части
WHERE Занимаемая_площадь BETWEEN 100 AND 200;

SELECT Название, Количество_рот 
FROM Виды_войск
ORDER BY Количество_рот DESC;

SELECT Название 
FROM Части
WHERE Название LIKE 'Часть%';

-- 3
SELECT v.Фамилия, v.Имя, c.Название AS Часть
FROM Военнослужащие v
INNER JOIN Части c ON v.Часть = c.ID;

SELECT t.Название AS Техника, c.Название AS Часть
FROM Техника t
LEFT OUTER JOIN Части c ON t.Часть = c.ID;

-- 4 
SELECT Название, Город
FROM Части
WHERE ID IN (
    SELECT Часть 
    FROM Техника 
    WHERE Название = 'Танк Т-90'
);

SELECT Название, SUM(Количество_рот) AS Общие_роты
FROM Виды_войск
GROUP BY Название;

SELECT c.Название AS Часть, COUNT(v.ID) AS Количество_военнослужащих
FROM Военнослужащие v
INNER JOIN Части c ON v.Часть = c.ID
GROUP BY c.Название;
