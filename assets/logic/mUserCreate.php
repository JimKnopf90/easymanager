<?php

include("mCon.php");

$roleAdmin = $_POST["roleAdmin"];
$roleCC = $_POST["roleCC"];

if ($roleAdmin == null)
    $roleAdmin = 0;

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$sql = "INSERT INTO tUser (username, password, forename, lastname, mail, isAdmin) 
        VALUES ('" . $_POST["username"] . "', '" .md5($_POST['password']) . "', '" . $_POST['forename'] . "', '" .$_POST['lastname']     . "', '" . $_POST['mail'] . "', $roleAdmin)";

$bz = $dbh->exec($sql);

header("Location: ../../user.php");
