<?php
   
include("mConErp.php");

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");


    /** Table Header **/




echo '<div class="card">';
echo '<div class="card-header">';
echo '<strong class="card-title">Preisoptimierung</strong>';
echo '</div>';
echo '<div class="card-body">';

echo '<table id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>SKU</th>';
            echo '<th>ASIN</th>';
            echo '<th>Titel</th>';
            echo '<th>Lagerbestand</th>';
            echo '<th>Min.Preis</th>';
            echo '<th>Max.Preis</th>';
            echo '<th>Solo Preis</th>';
            echo '<th>Versand</th>';
            echo '<th>Strategie</th>';
            echo '<th>Gewinn</th>';
            echo '<th>Kategorie</th>';
            echo '<th></th>';
        echo '</tr>';
    echo '</thead>';

    echo '<tbody>'; 


 
    echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';


















