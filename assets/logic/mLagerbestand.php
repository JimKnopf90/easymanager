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
echo '<strong class="card-title">Lagerbestandsübersicht</strong>';
echo '</div>';
echo '<div class="card-body">';

echo '<table id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Kategorie</th>';
            echo '<th>Art.Nr.</th>';
            echo '<th>Art.Name</th>';
            echo '<th>ges. Lagerbestand</th>';
            echo '<th>in Aufträgen</th>';
            echo '<th>verf. Lagerbestand</th>';
            echo '<th>Bestandswert</th>';
        echo '</tr>';
    echo '</thead>';

    echo '<tbody>';


    foreach ($dbh->query($sql) as $row) {
        
        $istBestandswert = (floatval($row["fEKNetto"])) * (floatval($row["fVerfuegbar"])); 

        echo '<tr>';
            echo "<td>" . $row["Kategoriename"] . "</td>";
            echo "<td>" . $row["cArtNr"] . "</td>";
            echo "<td>" . $row["cName"] . "</td>";
            echo "<td>" . number_format(floatval($row["fLagerbestand"]),2, ",", ".") . "</td>";
            echo "<td>" . number_format(floatval($row["fInAuftraegen"]), 2,",", ".") . "</td>";
            echo "<td>" . number_format(floatval($row["fInAuftraegen"]), 2,",", ".") . "</td>";
            echo "<td>" . number_format(floatval($istBestandswert), 2,",", ".") . " €" . "</td>";
        echo '</tr>';
            
        $gesamtWarenwert = $gesamtWarenwert + $istBestandswert;
        $y = $y + 1;
    }

  
    echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<span>Gesamtwarenwert: </span>' . number_format($gesamtWarenwert,2, ",", "." ) . " €" ;   


















