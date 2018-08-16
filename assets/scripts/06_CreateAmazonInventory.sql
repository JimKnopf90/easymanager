USE [StaRsDB]
GO

/****** Object:  Table [dbo].[tAmazonAccess]    Script Date: 09.08.2018 09:54:18 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tAmazonInventory](
	[artikelbezeichnung] [varchar](MAX) NULL,
	[artikelbeschreibung] [varchar](MAX) NULL,
	[angebotsnummer] [varchar](MAX) NULL,
	[haendlerSKU] [varchar](MAX) NULL,
	[preis] [varchar](MAX) NULL,
	[menge] [varchar](MAX) NULL,
	[erstellungsdatum] [varchar](MAX) NULL,
	[imageUrl] [varchar](MAX) NOT NULL,
	[artikelIstMarketplaceAngebot] [varchar](MAX) NULL,
	[produktIDTyp] [varchar](MAX) NULL,
	[zshopShippingFee] [varchar](MAX) NULL,
	[anmerkungZumArtikel] [varchar](MAX) NULL,
	[artikelzustand] [varchar](MAX) NULL,
	[zshopCategory1] [varchar](MAX) NULL,
	[zshopBrowsePath] [varchar](MAX) NULL,
	[zshopStorefrontFeature] [varchar](MAX) NULL,
	[asin1] [varchar](MAX) NULL,
	[asin2] [varchar](MAX) NULL,
	[asin3] [varchar](MAX) NULL,
	[expressversand] [varchar](MAX) NULL,
	[zshopBoldface] [varchar](MAX) NULL,
	[produktID] [varchar](MAX) NULL,
	[bidForFeaturedPlacement] [varchar](MAX) NULL,
	[hinzufuegenLoeschen] [varchar](MAX) NULL,
	[anzahlBestellungen] [varchar](MAX) NULL,
	[versender] [varchar](MAX) NULL,
	[geschueftspreis] [varchar](MAX) NULL,
	[mengePreisTyp] [varchar](MAX) NULL,
	[mengeUntereGrenze1] [varchar](MAX) NULL,
	[mengePreis1] [varchar](MAX) NULL,
	[mengeUntereGrenze2] [varchar](MAX) NULL,
	[mengePreis2] [varchar](MAX) NULL,
	[mengeUntereGrenze3] [varchar](MAX) NULL,
	[mengePreis3] [varchar](MAX) NULL,
	[mengeUntereGrenze4] [varchar](MAX) NULL,
	[mengePreis4] [varchar](MAX) NULL,
	[mengeUntereGrenze5] [varchar](MAX) NULL,
	[mengePreis5] [varchar](MAX) NULL,
	[huendlerversandgruppe] [varchar](MAX) NULL,
	[produktsteuerschlüssel] [varchar](MAX) NULL,
	[preisProStueckohneSteuer4] [varchar](MAX) NULL,
	[preisProStueckohneSteuer5] [varchar](MAX) NULL
) ON [PRIMARY]
GO