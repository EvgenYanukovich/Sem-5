USE Base_Yanukovich;

----------1----------
CREATE ROLE [MyRole1];

CREATE LOGIN [User1_Yanukovich] WITH PASSWORD = '1234';
CREATE USER [User1_Yanukovich] FOR LOGIN [User1_Yanukovich];
ALTER ROLE [MyRole1] ADD MEMBER [User1_Yanukovich];

GRANT UPDATE ON dbo.Workers TO [MyRole1];
DENY UPDATE ON dbo.Operations TO [MyRole1];

----------2----------
CREATE LOGIN [User2_Yanukovich] WITH PASSWORD = '1234';
CREATE USER [User2_Yanukovich] FOR LOGIN [User2_Yanukovich];

----------3----------
CREATE ROLE [MyRole2];
ALTER ROLE [MyRole2] ADD MEMBER [User2_Yanukovich];

GRANT SELECT, UPDATE(DetailCount, WorkDate) ON dbo.WorkDetails TO [MyRole2];
DENY DELETE ON dbo.WorkDetails TO [MyRole2];

----------4----------
CREATE ROLE [MyRole3];
ALTER ROLE [MyRole3] ADD MEMBER [User2_Yanukovich];

GRANT SELECT(DetailCount, WorkDate), UPDATE ON dbo.WorkDetails TO [MyRole3];

----------5----------
GO
CREATE SCHEMA [Schema_Yanukovich] AUTHORIZATION [User1_Yanukovich];
GO
CREATE TABLE [Schema_Yanukovich].[Details] (
	ID INT PRIMARY KEY,
	Size INT,
	TypeDetail NVARCHAR(10)
);

GRANT SELECT ON [Schema_Yanukovich].[Details] TO [MyRole3];

----------6----------
CREATE LOGIN [User3_Yanukovich] WITH PASSWORD = '1234';
CREATE USER [User3_Yanukovich] FOR LOGIN [User3_Yanukovich] WITH DEFAULT_SCHEMA = [Schema_Yanukovich];

SELECT * FROM sys.schemas;
SELECT * FROM [Schema_Yanukovich].[Details];

DROP TABLE [Schema_Yanukovich].[Details];
DROP SCHEMA [Schema_Yanukovich];

SELECT * FROM sys.schemas WHERE name = 'Schema_yanukovich';

----------7----------
GO
CREATE VIEW [vw_WorkerDetails]
AS
SELECT LastName, FirstName, Phone
FROM dbo.Workers;
GO

GRANT SELECT ON [vw_WorkerDetails] TO [User3_Yanukovich];

SELECT * FROM [Base_Yanukovich].[dbo].[vw_WorkerDetails];
SELECT * FROM dbo.Workers;

DROP VIEW [vw_WorkerDetails];

----------8----------
CREATE ROLE [Admin];
CREATE ROLE [DataEntry];
CREATE ROLE [Viewer];


CREATE LOGIN [admin_user] WITH PASSWORD = '1234';
CREATE USER [admin_user] FOR LOGIN [admin_user];

CREATE LOGIN [data_entry_user] WITH PASSWORD = '1234';
CREATE USER [data_entry_user] FOR LOGIN [data_entry_user];

CREATE LOGIN [viewer_user] WITH PASSWORD = '1234';
CREATE USER [viewer_user] FOR LOGIN [viewer_user];


ALTER ROLE [Admin] ADD MEMBER [admin_user];
ALTER ROLE [DataEntry] ADD MEMBER [data_entry_user];
ALTER ROLE [Viewer] ADD MEMBER [viewer_user];

--Разрешения для админа
GRANT SELECT, INSERT, UPDATE, DELETE, ALTER ON dbo.Workers TO [Admin];
GRANT SELECT, INSERT, UPDATE, DELETE, ALTER ON dbo.Operations TO [Admin];
GRANT SELECT, INSERT, UPDATE, DELETE, ALTER ON dbo.WorkDetails TO [Admin];

INSERT INTO dbo.Workers (LastName, FirstName, Phone, Experience)
VALUES ('Smirnov', 'Sergey', '+375299999999', 4);

DELETE FROM dbo.Workers WHERE WorkerID = 1;


--Разрешения для дата энтри
GRANT SELECT, INSERT, UPDATE ON dbo.Workers TO [DataEntry];
GRANT SELECT, INSERT, UPDATE ON dbo.Operations TO [DataEntry];
GRANT SELECT, INSERT, UPDATE ON dbo.WorkDetails TO [DataEntry];
INSERT INTO dbo.Workers (LastName, FirstName, Phone, Experience)
VALUES ('Petrov', 'Alexey', '+375292222222', 2);

DELETE FROM dbo.Workers WHERE WorkerID = 2; --ошибка из-за DENY

--разешение для вьювера
GRANT SELECT ON dbo.Workers TO [Viewer];
GRANT SELECT ON dbo.Operations TO [Viewer];
GRANT SELECT ON dbo.WorkDetails TO [Viewer];

SELECT * FROM dbo.Workers;

INSERT INTO dbo.Workers (LastName, FirstName, Phone, Experience)
VALUES ('Ivanov', 'Ivan', '+375291234567', 5); --ошибка из-за DENY
