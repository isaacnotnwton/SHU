<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

// $o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

// $code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );

$o = new WeiboOAuth( WB_AKEY , WB_SKEY );  
$keys = $o->getRequestToken();  
$aurl = $o->getAuthorizeURL( $keys['oauth_token'] ,false , $_SERVER['SCRIPT_URI'].'/treehole.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新浪微博PHP SDK V2版 Demo - Powered by Sina App Engine</title>
</head>

<body>
	<?php header("Location: $aurl"); ?>
</body>
</html>
