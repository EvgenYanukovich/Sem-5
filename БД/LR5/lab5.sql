-- Задание 1
USE BaseMysql_Yan;

SELECT 
    LEFT(Фамилия, 6) AS Фамилия, 
    RIGHT(CONCAT(Фамилия, ' ', Имя), CHAR_LENGTH(Фамилия) + CHAR_LENGTH(Имя) + CHAR_LENGTH(' ') - LOCATE(' ', CONCAT(Фамилия, ' ', Имя))) AS Имя
FROM Военнослужащие;

-- Задание 2
-- 1. Вывести части с количеством сооружений больше 10 и округлить площадь до двух знаков после запятой
SELECT Название, ROUND(Занимаемая_площадь, 2) AS 'Площадь'
FROM Части
WHERE Кол_во_сооружений > 10;

-- 2. Округление количества сооружений до ближайшего целого числа
SELECT Название, CEILING(Кол_во_сооружений) AS 'Округленное количество сооружений'
FROM Части;

-- 3. Генерация случайного значения количества рот
SELECT Название, ROUND(RAND() * 10) AS 'Случайное количество рот', NOW() AS 'Время запроса'
FROM Виды_войск;

-- 4. Вывод абсолютной разницы в количестве рот между двумя видами войск
SELECT w1.Название AS Вид_войск_1, w2.Название AS Вид_войск_2, ABS(w1.Количество_рот - w2.Количество_рот) AS 'Разница в ротах'
FROM Виды_войск w1, Виды_войск w2
WHERE w1.ID <> w2.ID;

-- Задание 3
CREATE VIEW PartsWithTroops AS
   SELECT v.Фамилия AS Военнослужащий, v.Имя, c.Название AS Часть, w.Название AS Вид_войск
   FROM Военнослужащие v
   INNER JOIN Части c ON v.Часть = c.ID
   INNER JOIN Виды_войск w ON v.Вид_войск = w.ID;

SELECT * 
FROM PartsWithTroops
WHERE Вид_войск = 'Пехота';

-- Задание 4
DELIMITER //
CREATE FUNCTION AreaLevel(area FLOAT)
RETURNS VARCHAR(20)
DETERMINISTIC
BEGIN
   DECLARE level VARCHAR(20);
   CASE
       WHEN area < 100 THEN SET level = 'Малая площадь';
       WHEN area BETWEEN 100 AND 200 THEN SET level = 'Средняя площадь';
       ELSE SET level = 'Большая площадь';
   END CASE;
   RETURN level;
END //
DELIMITER ;

-- Использование хранимой функции:
SELECT Название, AreaLevel(Занимаемая_площадь)
FROM Части;

