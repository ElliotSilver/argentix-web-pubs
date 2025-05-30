<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.html');
else 
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/Patient-PatientExample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
