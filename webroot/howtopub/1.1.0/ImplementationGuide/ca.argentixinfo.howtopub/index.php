<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/index.html');
else 
  Redirect('http://argentixinfo.com/ig/howtopub/1.1.0/ImplementationGuide-ca.argentixinfo.howtopub.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
