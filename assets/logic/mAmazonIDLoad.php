<?php

include("mCon.php");
include("mAmazonAccessKeys.php");

$inputfields = [
            "Sellername" => "Bitte hinterlege den Sellernamen",
            "SellerID" => "Bitte hinterlege die SellerID",
            "AWSAuthToken" => "Bitte hinterlege den MWS Authentifizierungstoken",
            "AWSAccessKey" => "Bitte hinterlege den AWS Access Key",
            "SecretKey" => "Bitte hinterlege den SecretKey",
            "MarketplaceID" => "Bitte hinterlege die Marketplace-ID"];

echo "<div class='row form-group'>";

    foreach ($inputfields as $inputs => $information){
        
        echo "<div class='col col-md-3'>";
            echo "<label for='text-input' class=' form-control-label'> $inputs </label>";
        echo "</div>";
        echo "<div class='col-12 col-md-9'>";
            echo "<input type='text' id='text-input' name='text-input' placeholder='$inputs' class='form-control' value=''>";
            echo "<small class='form-text text-muted'>$information</small>";
        echo "</div>";
    }

echo "</div>";
