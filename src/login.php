
<?php


ini_set('display_errors', '1');
 error_reporting(-1);

// You'll need to download phpseclib and add it to your include path
// Add phpseclib to the include path http://phpseclib.sourceforge.net/
set_include_path(get_include_path().PATH_SEPARATOR.'./lib/phpseclib0.3.10');


require "OpenIDConnectClient.php5";

$oidc = new OpenIDConnectClient('https://tas.fhict.nl/identity',
                                'i274003-buro-portfolio',
                                'hpmbwp3MajeJUvBN8BnHXU');
$oidc->addScope(array('openid','profile','email'));
$oidc->authenticate();
session_start();
$_SESSION['name'] = $oidc->requestUserInfo('name');
$_SESSION['email'] = $oidc->requestUserInfo('email');

$_SESSION['ingelogd'] = true;


header('Location:index.php');
	
	
?>

