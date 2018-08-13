<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
        
$sql = "SELECT SellerID, MWSAuthToken, AWSAccesKeyID, SecretKey, MarketplaceID, Sellername
                FROM tAmazonAccess";

                foreach ($dbh->query($sql) as $row) {
                    
                    $row["Sellername"];
                    $row["SellerID"];
                    $row["MWSAuthToken"];
                    $row["AWSAccesKeyID"];
                    $row["SecretKey"];
                    $row["MarketplaceID"];
                
                
                }