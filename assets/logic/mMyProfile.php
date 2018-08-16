<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
$sql = "SELECT usernameid, username, forename, password, lastname, mail, salutation, birthday, street, place, postCode, aboutYou, phoneNumber, userImage
                FROM tUser WHERE username =  '" . $_SESSION['adminusername'] . "'";
    //echo $sql;

  ////isAdmin, 

  $optionSalutation = [
    "Herr" => "Bitte wähle eine Anrede",
    "Frau" => "Bitte wähle eine Anrede"
];

 $normalInputfields = [
            "Vorname" => "Bitte hinterlege deinen Vornamen",
            "Nachname" => "Bitte hinterlege deinen Nachnamen",
            "Geburtstag" => "Bitte hinterlege deinen Geburtstag",
            "Straße" => "Bitte hinterlege deine Straße und deine Hausnummer",
            "Ort" => "Bitte hinterlege deinen Wohnort",
            "Postleitzahl" => "Bitte hinterlege deine Postleitzahl",
            "E-Mail" => "Bitte hinterlege deine E-Mail Adresse",
            "Passwort" => "Bitte hinterlege dein Passwort",
            "Über dich" => "Schreibe etwas über dich",
            "Telefonnummer" => "Bitte hinterlege deine Telefonnummer"
];   
foreach ($dbh->query($sql) as $row) { 
    
echo "<div class='row form-group'>";
    echo "<div class='col col-md-3'><label for='select' class='form-control-label'>Anrede</label></div>";
        echo "<div class='col-12 col-md-9'>";
        
            echo "<select name='select' id='select' class='form-control'>";
            foreach($optionSalutation as $salutation => $info){
                echo "<option>$salutation</option>";
            }
            echo "</select>";
        
            echo "<small class='form-text text-muted'>$info</small>";
        
        echo "</div>";

    foreach ($normalInputfields as $inputs => $information){
		$i = 0;
        if($inputs != "Passwort"){
            echo "<div class='col col-md-3'>";
                echo "<label for='text-input' class=' form-control-label'> $inputs </label>";
            echo "</div>";
            echo "<div class='col-12 col-md-9'>";
                echo "<input type='text' id='text-input' name='text-input' placeholder='$inputs' class='form-control' value='$row[$i]'>";
                echo "<small class='form-text text-muted'>$information</small>";
            echo "</div>";
        } else {
             echo "<div class='col col-md-3'>";
                echo "<label for='text-input' class=' form-control-label'> $inputs </label>";
            echo "</div>";
            echo "<div class='col-12 col-md-9'>";
                echo "<input type='password' id='text-input' name='text-input' placeholder='$inputs' class='form-control' value=''>";
                echo "<small class='form-text text-muted'>$information</small>";
            echo "</div>";
        }
		$i = $i+1;
    }
}
echo "</div>";


?>
