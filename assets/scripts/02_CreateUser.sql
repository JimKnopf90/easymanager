USE [StaRsDB]
GO

/****** Object:  Table [dbo].[tUser]    Script Date: 05.08.2018 13:56:24 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tUser](
	[usernameid] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](50) NOT NULL,
	[password] [varchar](50) NOT NULL,
	[forename] [varchar](50) NOT NULL,
	[lastname] [varchar](100) NOT NULL,
	[mail] [varchar](150) NOT NULL,
	[isAdmin] [int] NOT NULL,
	[active] [int] NULL,
 CONSTRAINT [PK_tUser] PRIMARY KEY CLUSTERED 
(
	[usernameid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[username] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO


