<?php

include("mCon.php");

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$usernameid =  $_GET['usernameid'];

$sql = "DELETE FROM tUser WHERE usernameid =" . $usernameid ;


$bz = $dbh->exec($sql);

header("Location: ../../user.php");
