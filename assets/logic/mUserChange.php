<?php

include("mCon.php");

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");



$sql = sprintf("UPDATE tUser SET username = '%s', password = '%s', forename = '%s', lastname = '%s', mail = '%s', isAdmin = '%s' WHERE usernameid = '%s'",
          $_GET['username'], md5($_GET['password']), $_GET['forename'], $_GET['lastname'], $_GET['mail'], $_GET['isAdmin'], $_GET['usernameid']);


$bz = $dbh->exec($sql);

header("Location: ../../user.php");
