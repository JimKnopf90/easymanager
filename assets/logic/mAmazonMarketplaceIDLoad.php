<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT SellerID, MWSAuthToken, AWSAccesKeyID, SecretKey, MarketplaceID
                FROM tAmazonAccess";


echo "<table id='bootstrap-data-table' class='table table-striped table-bordered'>";
echo "<thead>";
echo "<tr>";

echo "<th>SellerID</th>";
echo "<th>MWSAuthToken</th>";
echo "<th>AWSAccesKey</th>";
echo "<th>SecretKey</th>";
echo "<th>MarketplaceID</th>";
echo "</tr>";


echo '</thead><tbody>';

foreach ($dbh->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row["SellerID"] . "</td>";
    echo "<td>" . $row["MWSAuthToken"] . "</td>";
    echo "<td>" . $row["AWSAccesKeyID"] . "</td>";
    echo "<td>" . $row["SecretKey"] . "</td>";
    echo "<td>" . $row["MarketplaceID"] . "</td>";
    echo "</tr>";

}

echo "</tbody>";
echo "</table>";