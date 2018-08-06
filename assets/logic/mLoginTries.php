<?php


$sql = "SELECT tries FROM tLoginTries WHERE usernameid = " . $usernameid;

$sth = $dbh->prepare($sql);
$sth->execute();

$tries = $sth->fetchAll();

if ($tries == null)
    $tries[0]['tries'] = 0;

$tries[0]['tries'] = $tries[0]['tries'] + 1;
$sql = "UPDATE tLoginTries SET tries = ". $tries[0]['tries'] . " WHERE usernameid = " . $usernameid .
    " IF @@ROWCOUNT=0
                INSERT INTO tLoginTries(usernameid, tries) VALUES(" . $usernameid .",1)";

$bz = $dbh->exec($sql);