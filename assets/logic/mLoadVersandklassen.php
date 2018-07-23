<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT VersandklassenID, VersandklasseJTL, Preis, PreisVerpackungskosten, GewichtMax, MesswerteMax
                FROM tVersandklassen";

echo '<div class="card">';
echo '<div class="card-header">';
echo '<strong class="card-title">Versandklassenübersicht</strong>';
echo '</div>';
echo '<div class="card-body">';
echo '<table id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '<thead>';
        echo '<tr>';
        echo '<th>Versandklasse</th>';
        echo '<th>Versandkosten</th>';
        echo '<th>Verpackungskosten</th>';
        echo '<th>max. Gewicht</th>';
        echo "<th>max. Ma&szlig;e</th></tr></thead>";

    foreach ($dbh->query($sql) as $row) {
        echo '<tr>';
            echo "<td>" .$row["VersandklasseJTL"] . "</td>";
            echo "<td>" . number_format(floatval($row["Preis"]),2, ",", ".") . "</td>";
            echo "<td>" . number_format(floatval($row["PreisVerpackungskosten"]),2, ",", ".") . "</td>";
            echo "<td>" . number_format(floatval($row["GewichtMax"]),2, ",", ".") . "</td>";
            echo "<td>" . number_format(floatval($row["MesswerteMax"]),2, ",", ".") . "</td>";  
        echo "</tr>";
    }
    echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';