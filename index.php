<?php

$uri = $_SERVER["request_uri"];
$uri = explode("/", $uri);
$uri = array_slice($uri, 1);

switch ($uri[0]) {
	case 'admin':
		$page = new Back(array_slice($uri, 1));
		break;

	default:
		$page = new Front($uri);
		break;
}

echo $page->html;
?>
