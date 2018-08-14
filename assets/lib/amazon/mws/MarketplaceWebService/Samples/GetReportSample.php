<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 * Get Report  Sample
 */

include_once ('.config.inc.php');



/************************************************************************
* Uncomment to configure the client instance. Configuration settings
* are:
*
* - MWS endpoint URL
* - Proxy host and port.
* - MaxErrorRetry.
***********************************************************************/
// IMPORTANT: Uncomment the approiate line for the country you wish to
// sell in:
// United States:
//$serviceUrl = "https://mws.amazonservices.com";
// United Kingdom
//$serviceUrl = "https://mws.amazonservices.co.uk";
// Germany
$serviceUrl = "https://mws.amazonservices.de";
// France
//$serviceUrl = "https://mws.amazonservices.fr";
// Italy
//$serviceUrl = "https://mws.amazonservices.it";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn";
// Canada
//$serviceUrl = "https://mws.amazonservices.ca";
// India
//$serviceUrl = "https://mws.amazonservices.in";

$config = array (
  'ServiceURL' => $serviceUrl,
  'ProxyHost' => null,
  'ProxyPort' => -1,
  'MaxErrorRetry' => 3,
);

/************************************************************************
 * Instantiate Implementation of MarketplaceWebService
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new MarketplaceWebService_Client(
     AWS_ACCESS_KEY_ID, 
     AWS_SECRET_ACCESS_KEY, 
     $config,
     APPLICATION_NAME,
     APPLICATION_VERSION);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates MarketplaceWebService
 * responses without calling MarketplaceWebService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MarketplaceWebService/Mock tree
 *
 ***********************************************************************/
 // $service = new MarketplaceWebService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Get Report Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MarketplaceWebService_Model_GetReportRequest
 // object or array of parameters
 $reportId = '11956409547017752';
 
 $parameters = array (
   'Merchant' => MERCHANT_ID,
   'Report' => @fopen('php://memory', 'rw+'),
   'ReportId' => $reportId,
   'MWSAuthToken' => 'amzn.mws.c4b28fbe-e31f-e7d1-c8a4-cac84484c490', // Optional
 );
 $request = new MarketplaceWebService_Model_GetReportRequest($parameters);

$request = new MarketplaceWebService_Model_GetReportRequest();
$request->setMerchant(MERCHANT_ID);
$request->setReport(@fopen('php://memory', 'rw+'));
$request->setReportId($reportId);
$request->setMWSAuthToken('amzn.mws.c4b28fbe-e31f-e7d1-c8a4-cac84484c490'); // Optional
 
invokeGetReport($service, $request);

/**
  * Get Report Action Sample
  * The GetReport operation returns the contents of a report. Reports can potentially be
  * very large (>100MB) which is why we only return one report at a time, and in a
  * streaming fashion.
  *   
  * @param MarketplaceWebService_Interface $service instance of MarketplaceWebService_Interface
  * @param mixed $request MarketplaceWebService_Model_GetReport or array of parameters
  */
  function invokeGetReport(MarketplaceWebService_Interface $service, $request) 
  {
      try {
              $response = $service->getReport($request);

                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetReportResponse\n");
                if ($response->isSetGetReportResult()) {
                  $getReportResult = $response->getGetReportResult(); 
                  echo ("            GetReport");
                  
                  if ($getReportResult->isSetContentMd5()) {
                    echo ("                ContentMd5");
                    echo ("                " . $getReportResult->getContentMd5() . "\n");
                  }
                }
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                }
                
                echo ("        Report Contents\n");
                $str = stream_get_contents($request->getReport());
                $str = utf8_encode($str);
                //echo  $str . "\n";
                // TR: Aufgeteilt nach Tab / Absatz und in einem Array gespeichert
                $str = str_replace("'","''",$str);
                $parts = preg_split('/[\t\n]/', $str);

                $hostname = "";
                $dbname = "";
                $dbusername="";
                $pw="";
                include ("../../../../../logic/mCon.php");

                $dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$dbusername","$pw");
                $sql = "";

                for ($i = 48; $i < sizeof($parts) -1; $i = $i + 48)
                {
                    $sql =  "INSERT INTO tAmazonInventory (artikelbezeichnung, artikelbeschreibung, angebotsnummer, haendlerSKU, preis, menge, erstellungsdatum, imageUrl, 
                                          artikelIstMarketplaceAngebot, produktIDTyp, zshopShippingFee, anmerkungZumArtikel, artikelzustand, zshopCategory1,	
                                          zshopBrowsePath, zshopStorefrontFeature, asin1, asin2, asin3, internationalerVersand, expressversand, zshopBoldface, produktID, 
                                          bidForFeaturedPlacement, hinzufuegenLoeschen, anzahlBestellungen, versender, geschueftspreis, mengePreisTyp,	mengeUntereGrenze1, 
                                          mengePreis1, mengeUntereGrenze2, mengePreis2, mengeUntereGrenze3, mengePreis3, mengeUntereGrenze4, mengePreis4, mengeUntereGrenze5, 
                                          mengePreis5, huendlerversandgruppe, produktsteuerschlüssel, nettopreis, nettopreisBusiness, preisProStueckohneSteuer1, preisProStueckohneSteuer2, 
                                          preisProStueckohneSteuer3, preisProStueckohneSteuer4, preisProStueckohneSteuer5)
                                          VALUES ('".$parts[$i]."','".$parts[$i+1]."','".$parts[$i+2]."','".$parts[$i+3]."','".$parts[$i+4]."','".$parts[$i+5]."','".$parts[$i+6]."','".$parts[$i+7]."',
                                                '".$parts[$i+8]."','".$parts[$i+9]."','".$parts[$i+10]."','".$parts[$i+11]."','".$parts[$i+12]."','".$parts[$i+13]."','".$parts[$i+14]."','".$parts[$i+15]."','".$parts[$i+16]."',
                                                '".$parts[$i+17]."','".$parts[$i+18]."','".$parts[$i+19]."','".$parts[$i+20]."','".$parts[$i+21]."','".$parts[$i+22]."','".$parts[$i+23]."','".$parts[$i+24]."','".$parts[$i+25]."',
                                                '".$parts[$i+26]."','".$parts[$i+27]."','".$parts[$i+28]."','".$parts[$i+29]."','".$parts[$i+30]."','".$parts[$i+31]."','".$parts[$i+32]."','".$parts[$i+33]."', '".$parts[$i+34]."',
                                                '".$parts[$i+35]."','".$parts[$i+36]."','".$parts[$i+37]."','".$parts[$i+38]."','".$parts[$i+39]."','".$parts[$i+40]."','".$parts[$i+41]."','".$parts[$i+42]."','".$parts[$i+43]."',
                                                '".$parts[$i+44]."','".$parts[$i+45]."','".$parts[$i+46]."','".$parts[$i+47]."') ";

                    $result = $dbh->exec($sql);
                }




                echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
     } catch (MarketplaceWebService_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
         echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }
                                                                                
