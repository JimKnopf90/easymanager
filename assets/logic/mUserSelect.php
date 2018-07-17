<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT usernameid, username, forename, password, lastname, mail, isAdmin
                FROM tUser WHERE usernameid = " . $_GET['id'];

$results = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;






