<?php
   
include("mCon.php");

$gesamtWarenwert = 0;
$y = 0;


$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT artikelbezeichnung, artikelbeschreibung,	angebotsnummer,	haendlerSKU, preis, menge, erstellungsdatum,
        imageUrl, artikelIstMarketplaceAngebot,	produktIDTyp, zshopShippingFee,	anmerkungZumArtikel, artikelzustand,
	    zshopCategory1,	zshopBrowsePath, zshopStorefrontFeature, asin1,	asin2, asin3, internationalerVersand, expressversand,
	    zshopBoldface, produktID, bidForFeaturedPlacement, hinzufuegenLoeschen , anzahlBestellungen, versender,	geschueftspreis,
	    mengePreisTyp, mengeUntereGrenze1, mengePreis1,	mengeUntereGrenze2,	mengePreis2, mengeUntereGrenze3, mengePreis3,
	    mengeUntereGrenze4,	mengePreis4,mengeUntereGrenze5,	mengePreis5, huendlerversandgruppe,	produktsteuerschlüssel,
	    nettopreis,	nettopreisBusiness,	preisProStueckohneSteuer1, preisProStueckohneSteuer2, preisProStueckohneSteuer3,
	    preisProStueckohneSteuer4, preisProStueckohneSteuer5
	    FROM tAmazonInventory";

echo '<div class="card">';
echo '<div class="card-header">';
echo '<strong class="card-title">Preisoptimierung von Amazon Artikeln</strong>';
echo '</div>';
echo '<div class="card-body">';

echo '<table id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>SKU</th>';
            echo '<th>ASIN</th>';
            echo '<th>Titel</th>';
            echo '<th>auf Lager</th>';
            echo '<th>min. Preis</th>';
            echo '<th>max. Preis</th>';
            echo '<th>Solo Preis</th>';
            echo '<th>Versand</th>';
            echo '<th>Strategie</th>';
            echo '<th>Gewinn/Stk.</th>';
            echo '<th></th>';
        echo '</tr>';
    echo '</thead>';

    echo '<tbody>'; 


    foreach ($dbh->query($sql) as $row) { 

        echo '<tr>';
            echo '<td>' . $row["haendlerSKU"] . '</td>';
            echo '<td><a href="#">' . $row["asin1"]. '</a></td>';
            echo '<td>' . $row["artikelbezeichnung"] . '</td>';
            echo '<td>' . $row["menge"] . '</td>';
            echo '<td>4,49</td>';
            echo '<td>5,49 €</td>';
            echo '<td>' . $row["preis"] . '</td>';
            echo '<td> Value</td>';
            echo '<td>B.B max.</td>';
            echo '<td>0,21 €</td>';
            echo '<td><button class="btn-edit" type="button" >B</button></td>';
        echo '</tr>';
    }

  
    echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';   


















