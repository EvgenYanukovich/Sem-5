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

GRANT SELECT ON [Schema_yanukovich].[Details] TO [MyRole3];

----------6----------
CREATE LOGIN [User3_Yanukovich] WITH PASSWORD = '1234';
CREATE USER [User3_Yanukovich] FOR LOGIN [User3_yanukovich] WITH DEFAULT_SCHEMA = [Schema_yanukovich];

SELECT * FROM sys.schemas;
SELECT * FROM [Schema_yanukovich].[Details];

DROP TABLE [Schema_yanukovich].[Details];
DROP SCHEMA [Schema_yanukovich];

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