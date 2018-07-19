<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT usernameid, username, forename, lastname, mail, isAdmin
                FROM tUser";


echo "<table id='bootstrap-data-table' class='table table-striped table-bordered'>";
echo "<thead>";
echo "<tr>";

echo "<th>ID</th>";
echo "<th>Benutzername</th>";
echo "<th>Vorname</th>";
echo "<th>Nachname</th>";
echo "<th>Mail</th>";
echo "<th>Rolle</th>";
echo "</tr>";


echo '</thead><tbody>';

foreach ($dbh->query($sql) as $row) {
    echo "<tr id='" . $row["usernameid"] . "'>";
    echo "<td>" .$row["usernameid"] . "</td>";
    echo "<td>" .$row["username"] . "</td>";
    echo "<td>" . $row["forename"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td>";
    echo "<td>" . $row["mail"] . "</td>";
    echo "<td>" . $row["isAdmin"] . "</td>";
    echo "</tr>";

}

echo "</tbody>";
echo "</table>";




