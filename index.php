<?php
/*
	This file simply loads other parts of webpage such as header, content and footer.
	There is not much to change. All the content is inside different pages.
	Please, do not touch this except you know what are you doing.
*/
define('ROOT_DIR', dirname(__FILE__));
$url = preg_split('@/@', $_SERVER['REQUEST_URI'], NULL, PREG_SPLIT_NO_EMPTY);

if (isset($url[0])) {
	$get = preg_split('@\?@', $url[count($url) - 1], NULL, PREG_SPLIT_NO_EMPTY);
}


if (isset($url[1])) {
	$page = 'templates/'.$url[0].'.php';
	if ($url[1][0] != '?') {
		require_once('templates/header.php');
		if (file_exists($page)) {
			require_once($page);
		} else {
			require_once('templates/404.php');
		}
		

		switch ($url[0]) {
			case 'logowanie':
			case 'zaloz-konto':
			
				break;
			default:
				require_once('templates/footer.php');
				break;
		}
	
	} else {
		require_once('templates/header.php');
		require_once('templates/home.php');
		require_once('templates/footer.php');
	}
} elseif (isset($url[0])) {
	if (isset($get)) {
		$page = 'templates/'.$get[0].'.php';
	} else {
		$page = 'templates/'.$url[0].'.php';
	}
	if ($url[0][0] != '?') {
		require_once('templates/header.php');
		if (file_exists($page)) {
			require_once($page);
		} else {
			require_once('templates/404.php');
		}
		switch ($url[0]) {
			case 'logowanie':
			case 'zaloz-konto':
			
				break;
			default:
				require_once('templates/footer.php');
				break;
		}
	} else {
		require_once('templates/header.php');
		require_once('templates/home.php');
		require_once('templates/footer.php');
	}
} else {
	require_once('templates/header.php');
	require_once('templates/home.php');
	require_once('templates/footer.php');
}

?>
