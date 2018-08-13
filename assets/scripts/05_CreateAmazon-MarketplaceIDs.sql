USE [StaRsDB]
GO

/****** Object:  Table [dbo].[tAmazonAccess]    Script Date: 09.08.2018 09:54:18 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tAmazonAccess](
	[SellerID] [varchar](50) NOT NULL,
	[MWSAuthToken] [varchar](150) NOT NULL,
	[AWSAccesKeyID] [varchar](150) NOT NULL,
	[SecretKey] [varchar](150) NOT NULL,
	[MarketplaceID] [varchar](150) NOT NULL,
	[Sellername] [varchar](150) NULL
) ON [PRIMARY]
GO


