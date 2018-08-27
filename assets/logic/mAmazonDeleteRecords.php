<?php

include("mCon.php");

$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");

$sql = "DELETE FROM tAmazonInventory";

$bz = $dbh->exec($sql);

header("Location: ../lib/amazon/mws/MarketplaceWebService/Samples/mAmazonGetReport.php");