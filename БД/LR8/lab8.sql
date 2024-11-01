use BaseMysql_Yan;

-- 2
CREATE USER 'user_sql'@'localhost' IDENTIFIED BY 'password123';
GRANT ALL PRIVILEGES ON BaseMysql_Yan.* TO 'user_sql'@'localhost';
FLUSH PRIVILEGES;

-- 3
CREATE USER 'read_only_user'@'localhost' IDENTIFIED BY 'readonly123';
GRANT SELECT ON BaseMysql_Yan.* TO 'read_only_user'@'localhost';

CREATE USER 'update_user'@'localhost' IDENTIFIED BY 'updatepass';
GRANT SELECT, UPDATE ON BaseMysql_Yan.* TO 'update_user'@'localhost';

FLUSH PRIVILEGES;

DELIMITER //

CREATE PROCEDURE CountUsers()
BEGIN
    SELECT COUNT(*) AS UserCount FROM mysql.user;
END //

DELIMITER ;
