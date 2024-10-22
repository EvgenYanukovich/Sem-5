USE BaseMysql_Yan;

-- 1
-- Хранимая процедура для подсчета 
-- количества военнослужащих в каждой части
DELIMITER //
CREATE PROCEDURE CountSoldiers()
BEGIN
   SELECT c.Название AS Часть, COUNT(v.ID) AS Количество_военнослужащих
   FROM Военнослужащие v
   INNER JOIN Части c ON v.Часть = c.ID
   GROUP BY c.Название;
END //
DELIMITER ;

CALL CountSoldiers();

-- Хранимая процедура для добавления нового военнослужащего
DELIMITER //
CREATE PROCEDURE AddSoldier(IN id INT ,IN ф VARCHAR(100), IN и VARCHAR(100), IN ч INT, IN вид_войск INT)
BEGIN
   INSERT INTO Военнослужащие (ID, Фамилия, Имя, Часть, Вид_войск)
   VALUES (id, ф, и, ч, вид_войск);
END //
DELIMITER ;

DROP procedure AddSoldier;

CALL AddSoldier(5 ,'Мальков', 'Георгий', 3, 2);

-- Хранимая процедура с выходным 
-- параметром для подсчета количества частей
DELIMITER //
CREATE PROCEDURE CountParts(OUT Количество_частей INT)
BEGIN
   SELECT COUNT(*) INTO Количество_частей FROM Части;
END //
DELIMITER ;

CALL CountParts(@Части);
SELECT @Части;

-- 2
-- ускорение поиска в таблице "Военнослужащие" по части
CREATE INDEX idx_Часть ON Военнослужащие(Часть);
SHOW INDEXES FROM Военнослужащие;

DROP INDEX idx_Часть ON Военнослужащие;
-- Включение профилирования:
SET profiling = 0;

SELECT COUNT(*) FROM Военнослужащие WHERE Часть = 1;
SHOW PROFILES;

-- 3
EXPLAIN SELECT v.Фамилия, v.Имя, c.Название AS Часть
FROM Военнослужащие v
INNER JOIN Части c ON v.Часть = c.ID
WHERE c.Название = 'Часть 1';

SHOW INDEXES FROM Военнослужащие;

-- 4
DELIMITER //
CREATE PROCEDURE CountSoldiersInPart(IN часть INT)
BEGIN
   DECLARE done INT DEFAULT FALSE;
   DECLARE soldier_count INT DEFAULT 0;
   DECLARE cur CURSOR FOR 
      SELECT COUNT(*) FROM Военнослужащие WHERE Часть = часть;
   DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
   
   OPEN cur;
   FETCH cur INTO soldier_count;
   
   IF soldier_count > 0 THEN
      SELECT CONCAT('Часть ', часть, ': ', soldier_count, ' военнослужащих') AS Результат;
   ELSE
      SELECT CONCAT('Часть ', часть, ': нет данных') AS Результат;
   END IF;
   
   CLOSE cur;
END //
DELIMITER ;

CALL CountSoldiersInPart(1);

-- 5
DELIMITER //
CREATE PROCEDURE PartsWithTroops(IN вид_войск INT, OUT количество INT)
BEGIN
   DECLARE done INT DEFAULT FALSE;
   DECLARE count_soldiers INT DEFAULT 0;
   DECLARE cur CURSOR FOR 
      SELECT COUNT(*) FROM Военнослужащие WHERE Вид_войск = вид_войск;
   DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

   OPEN cur;
   FETCH cur INTO count_soldiers;
   SET количество = count_soldiers;
   
   CLOSE cur;
END //
DELIMITER ;

CALL PartsWithTroops(1, @Количество_солдат);
SELECT @Количество_солдат;
