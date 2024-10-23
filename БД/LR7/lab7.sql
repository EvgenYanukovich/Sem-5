USE BaseMysql_Yan;

-- 1
DELIMITER //

CREATE PROCEDURE DeleteTechWithWeapon(tech_name VARCHAR(100))
BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
    END;
    
    START TRANSACTION; 

    DELETE FROM Вооружение WHERE Часть IN (SELECT Часть FROM Техника WHERE Название = tech_name);
    DELETE FROM Техника WHERE Название = tech_name;

    COMMIT;  
END //

DELIMITER ;

CALL DeleteTechWithWeapon('Танк Т-90');

-- 2
DELIMITER //

CREATE TRIGGER Insert_sum AFTER INSERT 
ON Техника FOR EACH ROW 
BEGIN
    SET @sum = @sum + NEW.Часть;  
END //

DELIMITER ;

SET @sum = 0;

INSERT INTO Техника (ID, Название, Часть, Характеристики)
VALUES (5 ,'БТР-80', 1, '100'), (6, 'Гаубица', 3, '150');

SELECT @sum;

-- 3
CREATE TABLE Deleted_Technics
(
    Название_техники VARCHAR(100),
    Часть_удалённая INT,
    Характеристики_удалённые VARCHAR(1000)
);

DELIMITER //

CREATE TRIGGER Trig_BeforeDelete BEFORE DELETE 
ON Техника FOR EACH ROW 
BEGIN
    INSERT INTO Deleted_Technics (Название_техники, Часть_удалённая, Характеристики_удалённые)
    VALUES (OLD.Название, OLD.Часть, OLD.Характеристики);
END //

DELIMITER ;

Drop trigger Trig_BeforeDelete;

DELETE FROM Техника WHERE Название= 'БТР-80';

SELECT * FROM Техника;
SELECT * FROM Deleted_Technics;
