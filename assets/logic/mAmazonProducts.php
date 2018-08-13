<?php
   
include("mConErp.php");

$gesamtWarenwert = 0;
$y = 0;


$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT        Tabelle.kKategorie, dbo.tKategorieSprache.cName AS 'Kategoriename', Tabelle.kOberKategorie, Tabelle.kArtikel, Tabelle.cArtNr, Tabelle.cName, Tabelle.fLagerbestand, Tabelle.fZulauf, Tabelle.fInAuftraegen, Tabelle.fVerfuegbar, dbo.tliefartikel.fEKNetto
FROM            (SELECT        dbo.tkategorie.kKategorie, dbo.tkategorie.kOberKategorie, dbo.tkategorieartikel.kArtikel, dbo.tArtikel.cArtNr, dbo.tArtikelBeschreibung.cName, dbo.tlagerbestand.fLagerbestand, 
                                                    dbo.tlagerbestand.fZulauf, dbo.tlagerbestand.fInAuftraegen, dbo.tlagerbestand.fVerfuegbar
                          FROM            dbo.tkategorie INNER JOIN
                                                    dbo.tkategorieartikel ON dbo.tkategorie.kKategorie = dbo.tkategorieartikel.kKategorie INNER JOIN
                                                    dbo.tArtikel ON dbo.tkategorieartikel.kArtikel = dbo.tArtikel.kArtikel INNER JOIN
                                                    dbo.tArtikelBeschreibung ON dbo.tkategorieartikel.kArtikel = dbo.tArtikelBeschreibung.kArtikel INNER JOIN
                                                    dbo.tlagerbestand ON dbo.tkategorieartikel.kArtikel = dbo.tlagerbestand.kArtikel
                          WHERE        (dbo.tkategorie.kOberKategorie IN
                                                        (SELECT        kKategorie
                                                          FROM            dbo.tkategorie AS tkategorie_1
                                                          WHERE        (kOberKategorie = 39))) OR
                                                    (dbo.tkategorie.kOberKategorie = 39)) AS Tabelle INNER JOIN
                         dbo.tliefartikel ON Tabelle.kArtikel = dbo.tliefartikel.tArtikel_kArtikel INNER JOIN dbo.tKategorieSprache ON dbo.tKategorieSprache.kKategorie = Tabelle.kKategorie
WHERE        (dbo.tliefartikel.tLieferant_kLieferant = 34)";

    /** Table Header **/




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
            echo '<td>AM18-07-25-01</td>';
            echo '<td><a href="https://www.amazon.de/dp/B06W9KWLPY">B06W9KWLPY</a></td>';
            echo '<td>' . $row["cName"] . '</td>';
            echo '<td>54</td>';
            echo '<td>4,49</td>';
            echo '<td>5,49 €</td>';
            echo '<td>6,99 €</td>';
            echo '<td>0,00 €</td>';
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


















