USE [StaRsDB]
GO

/****** Object:  Trigger [dbo].[UserSetInactive]    Script Date: 05.08.2018 13:58:28 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE TRIGGER [dbo].[UserSetInactive] 
   ON  [dbo].[tLoginTries]
   AFTER UPDATE
AS 
BEGIN
	
	SET NOCOUNT ON;
	if (SELECT tries FROM inserted) = 3
		UPDATE dbo.tUser SET active = 0 WHERE usernameid = (SELECT usernameid FROM inserted)

END
GO

ALTER TABLE [dbo].[tLoginTries] ENABLE TRIGGER [UserSetInactive]
GO


