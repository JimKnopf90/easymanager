USE [StaRsDB]
GO

/****** Object:  Table [dbo].[tLoginTries]    Script Date: 05.08.2018 13:54:14 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tLoginTries](
	[Usernameid] [int] NOT NULL,
	[tries] [int] NULL,
 CONSTRAINT [PK_tLoginTries] PRIMARY KEY CLUSTERED 
(
	[Usernameid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[tLoginTries]  WITH CHECK ADD FOREIGN KEY([Usernameid])
REFERENCES [dbo].[tUser] ([usernameid])
GO
