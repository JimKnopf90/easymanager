<?php

include("mCon.php");

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$sql = "SELECT * FROM tUser WHERE username = " . $_SESSION["adminusername"];

foreach ($dbh->query($sql) as $row ) {
    echo $row["username"];
}