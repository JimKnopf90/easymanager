<?php
 
    // TR: Versandklassen werden aus der Stars-DB gelesen und gespeichert.
    include("mCon.php");
    
    // TR: Variablen
    $y = 0;
    $k = 0;
    $list = [];

    $dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
    
    $sth = $dbh->prepare("SELECT * FROM tVersandklassen");
    $sth->execute();    
    
    $result = $sth->fetchAll();
    //print_r($result);
    
       
    // TR: Versandklassen werden in einem zweidimensionalem Array gespeichert um Versandkosten zu ermitteln.
    $versandklassen = array();
    
    for ($i=0; $i < count($result); $i++) {        
        $versandklassen[$result[$i]['VersandklasseJTL']] = array( $result[$i]['VersandklasseJTL'] => $result[$i]['Preis']);
    }

    
    // TR: Verpackungskosten werden in einem Array gespeichert.
    $verpackungskosten = array();
    
    for ($i=0; $i < count($result); $i++) {
        $verpackungskosten[$result[$i]['VersandklasseJTL']] = array( $result[$i]['VersandklasseJTL'] => $result[$i]['PreisVerpackungskosten']);
    }   
    

    include("mConErp.php");      
    
    $dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
    
    //Paging
    $limit = 100;
    
    
    if (isset($_GET["page"])) { 
        $page  = $_GET["page"];       
    } else { 
        $page=1;        
    };    
    
     $start_from = ($page-1) * $limit;      
    
    $sql = "SELECT DISTINCT 'Amazon' AS Plattform, AVAL.kArtikel, AVAL.kStueckliste, AVAL.Artikelnummer, AVAL.Bezeichnung, AVAL.EAN, AVAL.ASIN, AVAL.PreisAmazon, COALESCE(AVAL.Hersteller, 'kein Wert') As Hersteller, AVAL.IstStuecklistenkomponente, 
                         AVAL.VerkaufspreisBrutto, EK.GesamtEkNetto, Steuer.fSteuersatz, dbo.tVersandklasse.kVersandklasse, dbo.tVersandklasse.cName, AVAL.BestandGesamt, AVAL.Versandgewicht
                         FROM            ArtikelVerwaltung.vArtikelliste AS AVAL INNER JOIN
                         dbo.tkategorieartikel AS KA ON AVAL.kArtikelForKategorieArtikel = KA.kArtikel INNER JOIN
                         dbo.tArtikel AS Art ON Art.kArtikel = AVAL.kArtikel INNER JOIN
                         dbo.tSteuersatz AS Steuer ON Art.kSteuerklasse = Steuer.kSteuersatz INNER JOIN
                         dbo.tVersandklasse ON Art.kVersandklasse = dbo.tVersandklasse.kVersandklasse LEFT OUTER JOIN
                             (SELECT        dbo.tStueckliste.kStueckliste, SUM(dbo.tliefartikel.fEKNetto * dbo.tStueckliste.fAnzahl) AS GesamtEkNetto
                               FROM            dbo.tStueckliste INNER JOIN
                                                         dbo.tliefartikel ON dbo.tStueckliste.kArtikel = dbo.tliefartikel.tArtikel_kArtikel
														 WHERE dbo.tliefartikel.tLieferant_kLieferant = 34
                               GROUP BY dbo.tStueckliste.kStueckliste) AS EK ON EK.kStueckliste = AVAL.kStueckliste
                          WHERE        (KA.kKategorie IN
                             (SELECT        kKategorie
                               FROM            dbo.tkategorie
                               WHERE        (kOberKategorie = 41))) AND (1 = AVAL.Zustand)
                               UNION
                            SELECT DISTINCT 'verpacking_com' AS Plattform, AVAL.kArtikel, AVAL.kStueckliste, AVAL.Artikelnummer, AVAL.Bezeichnung, AVAL.EAN, AVAL.ASIN, AVAL.PreisAmazon, COALESCE(AVAL.Hersteller, 'kein Wert') As Hersteller, AVAL.IstStuecklistenkomponente, 
                                                     AVAL.VerkaufspreisBrutto, EK.GesamtEkNetto, Steuer.fSteuersatz, dbo.tVersandklasse.kVersandklasse, dbo.tVersandklasse.cName, AVAL.BestandGesamt, AVAL.Versandgewicht
                                                     FROM            ArtikelVerwaltung.vArtikelliste AS AVAL INNER JOIN
                                                     dbo.tkategorieartikel AS KA ON AVAL.kArtikelForKategorieArtikel = KA.kArtikel INNER JOIN
                                                     dbo.tArtikel AS Art ON Art.kArtikel = AVAL.kArtikel INNER JOIN
                                                     dbo.tSteuersatz AS Steuer ON Art.kSteuerklasse = Steuer.kSteuersatz INNER JOIN
                                                     dbo.tVersandklasse ON Art.kVersandklasse = dbo.tVersandklasse.kVersandklasse LEFT OUTER JOIN
                                                         (SELECT        dbo.tStueckliste.kStueckliste, SUM(dbo.tliefartikel.fEKNetto * dbo.tStueckliste.fAnzahl) AS GesamtEkNetto
                                                           FROM            dbo.tStueckliste INNER JOIN
                                                                                     dbo.tliefartikel ON dbo.tStueckliste.kArtikel = dbo.tliefartikel.tArtikel_kArtikel
                                                                                     WHERE dbo.tliefartikel.tLieferant_kLieferant = 34
                                                           GROUP BY dbo.tStueckliste.kStueckliste) AS EK ON EK.kStueckliste = AVAL.kStueckliste
                                                      WHERE (KA.kKategorie IN (SELECT kKategorie FROM dbo.tkategorie WHERE KA.kKategorie IN (SELECT kKategorie From tkategorie	
                                WHERE kOberKategorie IN (SELECT kKategorie From tkategorie	
                                WHERE kOberKategorie IN (SELECT kKategorie From tkategorie	
                                WHERE kOberKategorie IN (SELECT kKategorie From tkategorie	
                                WHERE kOberKategorie = 218 OR kKategorie = 218)))))) AND (1 = AVAL.Zustand)";

$plattformSearch = isset($_GET['txt-plattform']) ? $_GET['txt-plattform'] : '';
$artikelnummerSearch = isset($_GET['txt-artikelnummer']) ? $_GET['txt-artikelnummer'] : '';
$artikelnameSearch = isset($_GET['txt-artikelname']) ? $_GET['txt-artikelname'] : '';
$herstellerSearch = isset($_GET['txt-hersteller']) ? $_GET['txt-hersteller'] : '';
$plattformIDSearch = isset($_GET['txt-plattformid']) ? $_GET['txt-plattformid'] : '';
$eknettoSearch = isset($_GET['txt-eknetto']) ? $_GET['txt-eknetto'] : '';
$mwstSearch = isset($_GET['txt-mwst']) ? $_GET['txt-mwst'] : '';
$versandklassenSearch = isset($_GET['txt-versandklasse']) ? $_GET['txt-versandklasse'] : '';
$gewichtSearch = isset($_GET['txt-gewicht']) ? $_GET['txt-gewicht'] : '';
$vkpreisSearch = isset($_GET['txt-vkpreis']) ? $_GET['txt-vkpreis'] : '';
$bestandSearch = isset($_GET['txt-bestand']) ? $_GET['txt-bestand'] : '';
$nullpreisSearch = isset($_GET['txt-nullpreis']) ? $_GET['txt-nullpreis'] : '';
$margeEuroSearch = isset($_GET['txt-margeeuro']) ? $_GET['txt-margeeuro'] : '';
$margeProzentSearch = isset($_GET['txt-margeprozent']) ? $_GET['txt-margeprozent'] : '';


echo '<div class="card">';
echo '<div class="card-header">';
echo '<strong class="card-title">Lagerbestandsübersicht</strong>';
echo '</div>';
echo '<div class="card-body">';

echo '<table id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Plattform</th>';
            echo '<th>Artikelnummer</th>';
            echo '<th>Artikelname</th>';
            echo '<th>Plattform ID</th>';
            echo '<th>EK Netto</th>';
            echo '<th>Mehrwertsteuer</th>';
            // echo "<th>Versandklassen-ID</th>";
            echo '<th>Versandklasse</th>';
            echo '<th>Gewicht</th>';
            echo '<th>Nullpreis</th>';
            echo '<th>VK Preis</th>';
            echo '<th>Marge €</th>';
            echo '<th>Marge %</th>';
            echo '<th>Bestand</th>';
            echo '<th>Kategorie</th>';
        echo '</tr>';
        
    echo '</thead>';
    echo '<tbody>';



