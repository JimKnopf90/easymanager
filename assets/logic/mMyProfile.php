<?php
        
include("mCon.php");
        
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
$sql = "SELECT usernameid, username, forename, password, lastname, mail, salutation, birthday, street, place, postCode, aboutYou, phoneNumber, vorwahl
                FROM tUser WHERE username =  '" . $_SESSION['adminusername'] . "'";
    echo $sql;
foreach ($dbh->query($sql) as $row) {
  ////isAdmin, 
?>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Anwenderprofil</strong> Einstellungen
                        </div>
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Benutzername</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Benutzername</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Anrede</label></div>
                                <div class="col-12 col-md-9">
                                    <select name='select' id='select' class='form-control'>
                                    <option value='1'>
                                    <?php 
                                    if($row["salutation"] == 0){
                                      echo "Herr";  
                                    }if($row["salutation"] == 1){
                                        echo "Frau";
                                    } ?> </option>
                                    <!-- <option value='2'><?php echo $row["salutation"]; ?></option> -->
                                    </select>
                                    <small class="form-text text-muted">Bitte hinterlege eine Anrede</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Vorname</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Vorname" class="form-control" value="<?php echo $row["forename"]; ?> "><small class="form-text text-muted">Bitte hinterlege deinen Vorname</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nachname</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nachname" class="form-control" value="<?php echo $row["lastname"]; ?>"><small class="form-text text-muted">Bitte hinterlege deinen Nachname</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Geburtstag</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Geburtsdatum" class="form-control" value="<?php echo $row["birthday"]; ?>"><small class="form-text text-muted">Bitte hinterlege dein Geburtsdatum z.B. 02.05.1990</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Straße</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Straße" class="form-control"  value="<?php echo $row["street"]; ?>"><small class="form-text text-muted">Bitte hinterlege deine Straße + Hausnummer</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ort</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Ort" class="form-control"  value="<?php echo $row["place"]; ?>"><small class="form-text text-muted">Bitte hinterlege deine Wohnort</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Postleitzahl</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="PLZ" class="form-control"  value="<?php echo $row["postCode"]; ?>"><small class="form-text text-muted">Bitte hinterlege deine Postleitzahl</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-Mail</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="E-Mail" class="form-control"  value="<?php echo $row["mail"]; ?>"><small class="form-text text-muted">Bitte trage deine E-Mail Adresse ein</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Passwort</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password-input" placeholder="Passwort" class="form-control"  value="<?php echo $row["password"]; ?>"><small class="form-text text-muted">
                                <span id="length" class="invalid">Mindestens 8 Zeichen</span>, <span id="letter" class="invalid">Kleinbuchstaben</span>, <span id="capital" class="invalid">Großbuchstaben</span> und <span id="number" class="invalid">Zahlen</span> 
                                </small></div>
                                <!-- <p id="letter" class="invalid"><b>Kleinbuchstaben</b></p>
                                <p id="capital" class="invalid"><b>Großbuchstaben</b></p>
                                <p id="number" class="invalid"><b>Zahlen</b></p>
                                <p id="length" class="invalid">Mindestens <b>8 Zeichen</b></p> -->
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Über dich</label></div>
                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Schreib etwas über dich selbst..." class="form-control" ><?php echo $row["aboutYou"]; ?></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefonnummer</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Telefonnummer" class="form-control" value="<?php echo $row["vorwahl"] . $row["phoneNumber"]; ?>"><small class="form-text text-muted">Bitte hinterlege deine Telefonnummer</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- right side -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Anwenderprofil</strong> Profilbild
                            </div>
                            <div class="card-body card-block">
                                <div id="divProfilpicture">
                                    <img id="profilpicture" src="images/male.png">
                                </div>
                                <!-- <button type="button" id="btnUploadProfilpicture" class="btn btn-success btn-sm"><i class="fa fa-upload"></i>&nbsp; Success</button> -->
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                                enctype="multipart/form-data">
                                    <input id="btnUploadProfilpicture" type="file" name="img" size="40" value=""><p>
                                    <button type="submit" name="submit" id="btnUploadProfilpicture" class="btn btn-success btn-sm" ><i class="fa fa-upload"></i>&nbsp; Success</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

<?php
}
?>
