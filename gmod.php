<?php
	$url = strtolower($_GET['url']);
	$filename = "./img/" .$url. ".jpg";
	if (file_exists($filename) && preg_match("/^[a-zA-Z0-9_]*/", $url)) {
		echo "true";
	} else {
		echo "false";
	}	
?>