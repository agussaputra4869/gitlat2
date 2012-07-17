<?php
require_once 'EpiCurl.php';
require_once 'EpiOAuth.php';
require_once 'EpiFoursquare.php';
require_once 'EpiSequence.php';

// Comment Lat GIT

$clientId = 'L0T1WUU1BRTXS4Z1VEY2EOJ4RS1IFOOAF5QGKW1JGUKUNANH';
$clientSecret = 'WPTHDVTRDWOEOSY2FQFKQWEWJ2KV3RTW0XJ5KYLELZGR2LD1';
$accessToken="KO1UF3CSZ4RYC4OK23YJSIR1YN3BG3KDCBVTPSXASKMU0JJH";
$code="IMOD3QKQSAKK0NGU2YWYJ3OIW0LJ15ZCZEQRF1SNWMZDAJX1";
$redirectUrl="http://localhost/four/test.php";

/* $fsObj = new EpiFoursquare($clientId, $clientSecret);
  // $redirectUrl is what you specified when creating the application
  $url = $fsObj->getAuthorizeUrl($redirectUrl);
  echo "<a href=\"{$url}\">Click here</a>"; */

  
 $fsObj = new EpiFoursquare($clientId, $clientSecret,$accessToken);
    $checkin = $fsObj->get('/users/self');
  echo $checkin->responseText;

 ?> 