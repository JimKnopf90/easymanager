<?php

include("mCon.php");

$roleAdmin = $_POST["roleAdmin"];
$roleCC = $_POST["roleCC"];

if ($roleAdmin == null)
    $roleAdmin = 0;

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$sql = "INSERT INTO tProfilImages (FileName, FileType, Document) 
        VALUES ('" . $_POST["FileName"] . "', '" .($_POST['FileType']) . "', '" . $_POST['Document'] . "')";

$bz = $dbh->exec($sql);

header("Location: ../../myProfile.php");