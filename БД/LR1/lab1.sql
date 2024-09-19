----------1----------
-- Подключаемся к серверу под пользователем sa_yanukovich
USE master;
GO
EXEC sp_addlogin 'sa_yanukovich', '1234';
EXEC sp_addsrvrolemember 'sa_yanukovich', 'sysadmin';

-- Создаем базу данных Base_Yanukovich
CREATE DATABASE Base_Yanukovich 
ON PRIMARY
( 
    NAME = 'Base_Yanukovich_Data', 
    FILENAME = 'D:\Education\DB\Base_Yanukovich.mdf', 
    SIZE = 10MB, 
    MAXSIZE = 100MB, 
    FILEGROWTH = 5MB 
),
FILEGROUP [SecondaryGroup] -- вторая файловая группа
(
    NAME = 'Base_Yanukovich_Secondary', 
    FILENAME = 'D:\Education\DB\Base_Yanukovich_secondary.ndf',
    SIZE = 10MB,
    MAXSIZE = 50MB,
    FILEGROWTH = 5MB
)
LOG ON
(
    NAME = 'Base_Yanukovich_Log',
    FILENAME = 'D:\Education\DB\Base_Yanukovich.ldf',
    SIZE = 5MB,
    MAXSIZE = 25MB,
    FILEGROWTH = 5MB
);
GO

-- Пример создания таблиц с нормализацией
CREATE TABLE Workers (
    WorkerID INT PRIMARY KEY IDENTITY(1,1),
    LastName NVARCHAR(50),
    FirstName NVARCHAR(50),
    MiddleName NVARCHAR(50),
    Address NVARCHAR(255),
    Phone NVARCHAR(15),
    Experience INT
);

CREATE TABLE Operations (
    OperationID INT PRIMARY KEY IDENTITY(1,1),
    OperationName NVARCHAR(100),
    ComplexityFlag BIT
);

CREATE TABLE WorkDetails (
    DetailID INT PRIMARY KEY IDENTITY(1,1),
    WorkerID INT,
    OperationID INT,
    DetailCount INT,
    WorkDate DATE,
    FOREIGN KEY (WorkerID) REFERENCES Workers(WorkerID),
    FOREIGN KEY (OperationID) REFERENCES Operations(OperationID)
);

-- Заполнение таблиц
INSERT INTO Workers (LastName, FirstName, MiddleName, Address, Phone, Experience)
VALUES ('Ivanov', 'Ivan', 'Ivanovich', 'Minsk, Lenina st., 15', '+375291234567', 5);

INSERT INTO Operations (OperationName, ComplexityFlag)
VALUES ('Soldering', 1);

INSERT INTO WorkDetails (WorkerID, OperationID, DetailCount, WorkDate)
VALUES (1, 1, 150, '2024-09-10');

----------2----------
BACKUP DATABASE Base_Yanukovich
TO DISK = 'D:\Education\DB\BackUp\Base_YanukovichBackup.bak'
WITH NOFORMAT, INIT, SKIP, NOREWIND, NOUNLOAD, STATS = 10;

----------3----------
-- Удаление таблиц
DROP TABLE WorkDetails;
DROP TABLE Workers;

-- Восстановление базы данных
USE master
ALTER DATABASE Base_Yanukovich SET MULTI_USER WITH ROLLBACK IMMEDIATE
ALTER DATABASE Base_Yanukovich SET SINGLE_USER WITH ROLLBACK IMMEDIATE

RESTORE DATABASE Base_Yanukovich
FROM DISK = 'D:\Education\DB\BackUp\Base_YanukovichBackup.bak'
WITH REPLACE, STATS = 10;

----------4----------
-- Изменяем данные
UPDATE Workers SET Experience = 10 WHERE WorkerID = 1;

-- Создаем разностную резервную копию
BACKUP DATABASE Base_Yanukovich
TO DISK = 'D:\Education\DB\BackUp\Base_YanukovichDiffBackup.bak'
WITH DIFFERENTIAL, INIT, STATS = 10;

----------5----------
BACKUP LOG Base_Yanukovich
TO DISK = 'D:\Education\DB\BackUp\Base_Yanukovich_LogBackup.bak'
WITH INIT, NO_TRUNCATE, STATS = 10;

----------6----------
-- Полное восстановление
RESTORE DATABASE Base_Yanukovich
FROM DISK = 'D:\Education\DB\BackUp\Base_YanukovichBackup.bak'
WITH REPLACE, NORECOVERY, STATS = 10;

-- Восстановление разностной копии
RESTORE DATABASE Base_Yanukovich
FROM DISK = 'D:\Education\DB\BackUp\Base_YanukovichDiffBackup.bak'
WITH NORECOVERY, STATS = 10;

-- Восстановление журнала транзакций
RESTORE LOG Base_Yanukovich
FROM DISK = 'D:\Education\DB\BackUp\Base_Yanukovich_LogBackup.bak'
WITH STATS = 10;

RESTORE DATABASE Base_Yanukovich WITH RECOVERY;

