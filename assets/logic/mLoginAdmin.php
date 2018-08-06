<?php
session_start();

include("mCon.php");

try {
    
    $dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
    $sql = "SELECT COUNT(*) FROM tUser WHERE username = :username AND password = :password AND isAdmin = 1 AND active = 1";
    $result = $dbh->prepare($sql);
    $result->execute(array('username' => $_POST['username'], 'password' => md5($_POST['password'])));
    $count = $result->fetchColumn();

    /* TR: Determine Usernameid*/
    $sql = "SELECT usernameid FROM tUser WHERE username = :username";
    $result = $dbh->prepare($sql);
    $result->execute(array('username' => $_POST['username']));
    $usernameid = $result->fetchColumn();
   
    if($count == 1) {

        $_SESSION["adminusername"] = $_POST['username'];
         header("Location: ../../index.php");

         $sql = "DELETE FROM tLoginTries WHERE usernameid = " . $usernameid;
         $sth = $dbh->prepare($sql);
         $sth->execute();

    }
    else
    {
        include ("mLoginTries.php");
        header("Location: ../../admin-login.php?tries=" . $tries[0]['tries']);
    }


    
  } catch (PDOException $e) {
        echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

unset($dbh); 

