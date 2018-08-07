USE [StaRsDB]
GO

/****** Object:  Table [dbo].[tVersandklassen]    Script Date: 05.08.2018 13:57:14 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tVersandklassen](
	[VersandklassenID] [int] NOT NULL,
	[VersandklasseJTL] [varchar](100) NOT NULL,
	[Preis] [decimal](18, 2) NULL,
	[PreisVerpackungskosten] [decimal](18, 2) NULL,
	[GewichtMax] [decimal](18, 2) NULL,
	[MesswerteMax] [varchar](100) NULL,
 CONSTRAINT [PK_tVersandklassen] PRIMARY KEY CLUSTERED 
(
	[VersandklassenID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO


