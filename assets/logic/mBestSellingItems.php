<?php

include("mConErp.php");

$position = 0;

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$sql = "SELECT TOP(10) AB.cName, Artikel.cArtNr, Artikel.Gesamtanzahl, Artikel.[Gesamt-VK-Preis], Artikel.[Gesamt-VK-Preis Netto] FROM (SELECT cArtNr, SUM(fVKPreis) AS 'Gesamt-VK-Preis', SUM(fVKNetto) AS 'Gesamt-VK-Preis Netto', SUM(nAnzahl) AS 'Gesamtanzahl'
        FROM tbestellpos
        GROUP BY cArtNr) AS Artikel JOIN tArtikel ON Artikel.cArtNr = tArtikel.cArtNr JOIN tArtikelBeschreibung AS AB ON AB.kArtikel = tArtikel.kArtikel 
        ORDER BY [Gesamt-VK-Preis] DESC";

echo "<div class='card'><div class='card-header'><strong class='card-title'><span>Top </span><span class='count'>10</span> Artikel</strong>";
echo "<div id='divBestseller' class='card-body'><table id='tblBestsellerItems' class='table'><thead>";

echo "<tr>";
echo "<th class='headBestsellerItems' scope='col'>#</th>";
echo "<th class='headBestsellerItems' scope='col'>Artikelbezeichnung</th>";
echo "<th class='headBestsellerItems' scope='col'>VK in <span class='fa fa-eur'></span></th>";
echo "</tr></thead>";

echo "<tbody><tr>";

foreach ($dbh->query($sql) as $row) {
    $position ++;
    echo "<td>" . $position . "</td>";
    echo "<td>" . $row["cName"] . "</td>";
    echo "<td>" . number_format($row["Gesamt-VK-Preis"], 2, ",", ".");"</td>";
    echo "</tr>";

}

echo " </tbody></table></div></div>";

















