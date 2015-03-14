<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../' );
require_once DVWA_WEB_PAGE_TO_ROOT.'dvwa/includes/dvwaPage.inc.php';
require_once DVWA_WEB_PAGE_TO_ROOT.'dvwa/includes/dvwaHeaders.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ] .= $page[ 'title_separator' ].'Help';

$id 		= xss_filter($_GET[ 'id' ]);
$security 	= $_GET[ 'security' ];

$challenges = array("fi","brute","csrf","exec","sqli","sqli_blind","upload","xss_r","xss_s");
if($id == in_array($challenges)) {
	$bae = "mamamamamamaaaaaaaaaaaaaaaaaaaa";
} else {
	$bae = "fdddddddddddddddddddddddd";
}

$help = file_get_contents( DVWA_WEB_PAGE_TO_ROOT."vulnerabilities/{$id}/help/help.php" );

$page[ 'body' ] .= "
<div class=\"body_padded\">
	{$help}
	{$bae}
</div>
";

dvwaHelpHtmlEcho( $page );

?>