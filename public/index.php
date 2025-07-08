<?php
include('../db/connect.php');
$url = $_SERVER['REQUEST_URI']; // поучаем адрес запроса


    if (preg_match('#^/page/(?<slug>[a-z0-9_-]+)$#', $url, $params)) {
		$page = include 'view/page/show.php';
	}
	if (preg_match('#^/page/all$#', $url, $params) or $url == '/') {
		$page = include 'view/page/all.php';
	}

	if(!isset($page)) {
		$page = include 'view/page/404.php';
	}



	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title in layout }}', $page['title'], 
		$layout); 
	$layout = str_replace('{{ content in layout }}', $page['content'], 
		$layout); 
	
	echo $layout;
    
?>
